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

    /* @keyframes microphone {
        from {
            opacity: 0.25;
        }
        to {
            transform: scale(2);
            opacity: 0;
        }
    } */

    
</style>
@include('components.admin.sidebar')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <br><br>
                <h2 class="text-center display-5">Pencarian Kosakata Pada al-Qur'an</h2>
                <form action="{{ url('QurAn/Search/Result') }}" id="search-form" method="get">
                    @csrf
                    <br><br>
                    <div class="row">
                        <div class="col-md-12 offset-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control select2bs4" data-placeholder="Any" id="lang_switch" name="lang_switch">
                                            <option disabled selected>Pilih Bahasa</option>
                                            <option value="indonesia">Indonesia</option>
                                            <option value="arab">Arab</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row" id="dynamic_input" name="dynamic_input">
                                <input name="input_type" id="input_type" type="text" style="display: none" />
                            </div> --}}
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <input id="search_input" name="keyword" type="search" class="form-control form-control-lg" placeholder="Masukan Kata">
                                            <div class="input-group-append">
                                                <button type="button" class="microphone input-group-text">
                                                    <i class="fas fa-microphone"></i>
                                                    <span class="recording-icon"></span>
                                                </button>
                                            </div>
                                            
                                            {{-- <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button> --}}
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
    var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
    var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;

    var grammar = '#JSGF V1.0';

    var recognition = new SpeechRecognition();
    var speechRecognitionList = new SpeechGrammarList();
    speechRecognitionList.addFromString(grammar, 1);
    recognition.grammars = speechRecognitionList;
    recognition.interimResults = false;

    recognition.onresult = function (event){
        var lastResult = event.results.length - 1;
        var content = event.results[lastResult][0].transcript;
        console.log(content);
        document.getElementById('search_input').value = content;
        

        setTimeout(function() {
            document.getElementById('search-form').submit();    
        }, 3000);
    }

    recognition.onspeechend = function(){
        recognition.stop();
    }

    recognition.onerror = function (){
        console.log(event.error);
        const microphone = document.querySelector('.microphone');
        microphone.classList.remove('recording');
    }

    document.querySelector('.microphone').addEventListener('click',function(){
        recognition.start();
        const microphone = document.querySelector('.microphone');
        microphone.classList.add('recording');
        // document.getElementById('search_input').value ='';
        
    });
</script>
{{-- Dynamic input field --}}
<script type="text/javascript">
    // $('#dynamic_input').hide()

    $('#lang_switch').change(function () {
        // var value = this.value;
        // $('#dynamic_input').hide()
        // $('#' + this.value).show();
        var text_field = $('#search_input')
        text_field.show();
        switch ($(this).val()){
            case 'indonesia':
                text_field.attr('dir','ltr');
                break;
            case 'arab':
                text_field.attr('dir','rtl');
                break;
        }
    });
</script>
