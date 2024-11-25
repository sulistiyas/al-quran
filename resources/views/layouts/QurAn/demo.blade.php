@include('components.admin.header')
<style>
    .microphone{
        cursor: pointer;
    }
    .microphone .recording-icon {
        display: none;
        width: 10px;
        height: 10px;
        background-color: brown;
        border-radius: 50%;
        animation: pulse 1.5s infinite linear;
    }
    .microphone.recording .recording-icon {
        display: inline;
    }
    .microphone.recording .fa-microphone {
        display: none;
    }

    
</style>
@include('components.admin.sidebar')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <br><br>
                <h2 class="text-center display-5">Pencarian Kosakata pada al-Qur'an</h2>
                {{-- Kosakata pada al-Qur'an --}}
                <form action="{{ url('QurAn/Search/Result') }}" id="search-form" method="get">
                    @csrf
                    <br><br>
                    <div class="row">
                        <div class="col-md-12 offset-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control"  id="select_language" onchange="updateCountry()">
                                            <option disabled selected>Pilih Bahasa</option>
                                        </select>
                                        <select id="select_dialect"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <input id="search_input" name="keyword" type="search" class="form-control form-control-lg" placeholder="Masukan Kata" required>
                                            <div class="input-group-append">
                                                <button type="button" class="microphone input-group-text" id="start_button" onclick="startButton(event)">
                                                    <i class="fas fa-microphone"></i>
                                                    <span class="recording-icon"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div id="results">
                                    <span id="final_span" class="final"></span>
                                    <span id="interim_span" class="interim"></span>
                                    <p></p>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="timeline">
                                        <div class="time-label">
                                            <span class="bg-green">Search History</span>
                                        </div>
                                        <div class="">
                                            <i class="fas fa-history"></i>
                                            @foreach ($history_data as $item_history)
                                                <div class="timeline-item">
                                                    <span class="time"><i class="fas fa-clock"></i> {{ $item_history->created_at }}</span>
                                                    <h3 class="timeline-header"><a href="{{ route('history_result',[$item_history->keyword]) }}">{{ $item_history->keyword }}</a></h3>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
  </div>
@include('components.admin.footer')

<script>
    $(function () {
      $('.select2').select2()
      $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    });
    
</script>
{{-- Mic Js --}}
<script>
    var langs = [
      ["Pilih Bahasa", ["id-ID"]],
      ["Bahasa Indonesia", ["id-ID"]],
      ["Bahasa Arab", ["ar"]],
    //   ["Bahasa Arab (U.A.E.)", ["ar-AE"]],
    //   ["Bahasa Arab (Bahrain)", ["ar-BH"]],
    //   ["Bahasa Arab (Algeria)", ["ar-DZ"]],
    //   ["Bahasa Arab (Egypt)", ["ar-EG"]],
    //   ["Bahasa Arab (Iraq)", ["ar-IQ"]],
    //   ["Bahasa Arab (Jordan)", ["ar-JO"]],
    //   ["Bahasa Arab (Kuwait)", ["ar-KW"]],
    //   ["Bahasa Arab (Lebanon)", ["ar-LB"]],
    //   ["Bahasa Arab (Libya)", ["ar-LY"]],
    //   ["Bahasa Arab (Morocco)", ["ar-MA"]],
    //   ["Bahasa Arab (Oman)", ["ar-OM"]],
    //   ["Bahasa Arab (Qatar)", ["ar-QA"]],
    //   ["Bahasa Arab (Saudi Arabia)", ["ar-SA"]],
    //   ["Bahasa Arab (Syria)", ["ar-SY"]],
    //   ["Bahasa Arab (Tunisia)", ["ar-TN"]],
    //   ["Bahasa Arab (Yemen)", ["ar-YE"]],
    //   [
    //     "English",
    //     ["en-AU", "Australia"],
    //     ["en-CA", "Canada"],
    //     ["en-IN", "India"],
    //     ["en-NZ", "New Zealand"],
    //     ["en-ZA", "South Africa"],
    //     ["en-GB", "United Kingdom"],
    //     ["en-US", "United States"],
    //   ],
    ];
  
    for (var i = 0; i < langs.length; i++) {
      select_language.options[i] = new Option(langs[i][0], i);
    }
    select_language.selectedIndex = 1;
    updateCountry();
    select_dialect.selectedIndex = 1;
    
    function updateCountry() {
        for (var i = select_dialect.options.length - 1; i >= 0; i--) {
            select_dialect.remove(i);
        }
        var list = langs[select_language.selectedIndex];
        var text_field = $('#search_input')
        text_field.show();
            if (select_language.selectedIndex == 0) {
                text_field.attr('dir','ltr');
            }
            if (select_language.selectedIndex == 1) {
                text_field.attr('dir','ltr');
            }
            if(select_language.selectedIndex == 2){
                text_field.attr('dir','rtl');
            }
            
        for (var i = 1; i < list.length; i++) {
            select_dialect.options.add(new Option(list[i][1], list[i][0]));
        }
        select_dialect.style.visibility =
            list[1].length == 1 ? "hidden" : "visible";
    }
  
    var create_email = false;
    var final_transcript = "";
    var recognizing = false;
    var ignore_onend;
    var start_timestamp;
    if (!("webkitSpeechRecognition" in window)) {
        upgrade();
    } else {
        //   start_button.style.display = "inline-block";
        var recognition = new webkitSpeechRecognition();
        recognition.continuous = true;
        recognition.interimResults = true;
  
        recognition.onstart = function () {
            recognizing = true;
            const microphone = document.querySelector('.microphone');
            microphone.classList.add('recording');
        };
  
        recognition.onerror = function (event) {
            if (event.error == "no-speech") {
                start_img.src = "mic.gif";
                ignore_onend = true;
            }
            if (event.error == "audio-capture") {
                start_img.src = "mic.gif";
                ignore_onend = true;
            }
            if (event.error == "not-allowed") {
            if (event.timeStamp - start_timestamp < 100) {
            } else {
            }
            ignore_onend = true;
            }
        };
  
        recognition.onend = function () {
            recognizing = false;
            if (ignore_onend) {
                return;
            }
            const microphone = document.querySelector('.microphone');
            microphone.classList.remove('recording');
            if (!final_transcript) {
                return;
            }
            if (window.getSelection) {
                window.getSelection().removeAllRanges();
                var range = document.createRange();
                range.selectNode(document.getElementById("search_input"));
                window.getSelection().addRange(range);
                console.log(final_transcript);

                //   submit keyword
                document.getElementById('search_input').value = final_transcript;
                //   Jeda 3 detik lalu submit
                setTimeout(function() {
                    document.getElementById('search-form').submit();    
                }, 3000);
            }
        };
  
        recognition.onresult = function (event) {
            var interim_transcript = "";
            for (var i = event.resultIndex; i < event.results.length; ++i) {
                if (event.results[i].isFinal) {
                    final_transcript += event.results[i][0].transcript;
                } else {
                    interim_transcript += event.results[i][0].transcript;
                }
            }
                final_transcript = capitalize(final_transcript);
                search_input.innerHTML = linebreak(final_transcript);
                interim_span.innerHTML = linebreak(interim_transcript);
            if (final_transcript || interim_transcript) {
                showButtons("inline-block");
            }
        };
     
    }
  
    function upgrade() {
      start_button.style.visibility = "hidden";
      showInfo("info_upgrade");
    }
  
    var two_line = /\n\n/g;
    var one_line = /\n/g;
    function linebreak(s) {
      return s.replace(two_line, "<p></p>").replace(one_line, "<br>");
    }
  
    var first_char = /\S/;
    function capitalize(s) {
      return s.replace(first_char, function (m) {
        return m.toUpperCase();
      });
    }
  
    function startButton(event) {
        const microphone = document.querySelector('.microphone');
        microphone.classList.add('recording');
      if (recognizing) {
        recognition.stop();
        return;
      }
        final_transcript = "";
        recognition.lang = select_dialect.value;
        recognition.start();
        ignore_onend = false;
        search_input.innerHTML = "";
        interim_span.innerHTML = "";
        
        showButtons("none");
        start_timestamp = event.timeStamp;
    }
  
  
    var current_style;
    function showButtons(style) {
      if (style == current_style) {
        return;
      }
      current_style = style;
    }
  </script>

