@include('components.admin.header')
@include('components.admin.sidebar')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <br><br>
                {{-- <h2 class="text-center display-5">Pencarian Kosakata Pada al-Qur'an</h2> --}}
                <form action="{{ url('QurAn/Search/Result') }}" id="search-form" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 offset-md-2">
                            
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{ route('search_page') }}" class="btn btn-block btn-success">Kembali</a>
                                </div>
                            </div>
                            <br>
                            <h2 class="display-5"><strong>Hasil Pencarian : {{ $keywords }}</strong></h2>
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card">
                                <div class="card-body">
                                    <table id="tbl_result" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>surah</th>
                                                <th>Indonesia</th>
                                                <th>Arab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($result as $item_result)
                                                <tr>
                                                    <td style="width: 150px">{{ $item_result->nama_latin }} <br> ({{ $item_result->jumlah_ayat }}), ayat {{ $item_result->nomor_ayat }}</td>
                                                    <td>
                                                        {{-- {{ $item_result->tr }} --}}
                                                        @php
                                                            $text = $item_result->tr;
                                                            $word = $keywords;
                                                            $text = preg_replace('#'. preg_quote($word) .'#i', '<span style="background-color: #F9F902;">\\0</span>', $text);
                                                            echo $text;
                                                        @endphp
                                                    </td>
                                                    <td>
                                                        @php
                                                            $text = $item_result->ar;
                                                            $word = $keywords;
                                                            $text = preg_replace('#'. preg_quote($word) .'#i', '<span style="background-color: #F9F902;">\\0</span>', $text);
                                                            echo $text;
                                                        @endphp
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
        // Datatables
        $("#tbl_result").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
        }).buttons().container().appendTo('#tbl_result_wrapper .col-md-6:eq(0)');
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    });
</script>
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
        document.getElementById('search-form').submit();
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
    });


</script>