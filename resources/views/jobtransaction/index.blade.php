@extends('nav/nav_landing')
{{-- @section('title', 'Detail Job') --}}
@section('konten')

  <link rel="stylesheet" href="css/mailstyle.css" />
  <link rel="stylesheet" href="css/2.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" type="text/css" href="/css/detail-job.css">

<body id="jobDetails">
  

  <div class="container space mt-5">
    <div class="row justify-content-center">
      <div class="card col-md-9 shadow-sm">
        <div>
          <div class="mt-4 mx-4">
            <table class="table-borderless ">
              <strong style="display: inline-block;">Order #{{$job->id}}</strong>
              <div class="item" style="float: right;">
                <p class="" style="display: inline-block; ">Status</p>
                <p class=" badge {{$job['color']}}" style="display: inline-block; ">{{$job['status']}}</p>
              </div>
          </div>

          <table class="mt-5 mb-4">
            <tr>
              <td>
                <div>
                  Client
                </div>
              </td>
              <td style=" padding-left: 40px; padding-right: 20px;">:</td>
              <td>
                <div>
                  <a href="#" class="link-secondary text-secondary">{{$job->users->name}}</a>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div>
                  Translator
                </div>
              </td>
              <td style="padding-left: 40px;">:</td>
              <td>
                <div>
                  <a href="#profile" class="link-success text-success">@if($job['translator_id'] != null){{$job->Translator->name}}@endif</a>
                </div>
              </td>
              <td>
                <div>
                </div>
              </td>
            </tr>
          </table>

          <table class="table table-borderless col-11">

            <thead class="card-header" style="border: transparent;">
              <tr class="" style="color: #62646a;">
                <th>Nama Item</th>
                <th>Jenis Bahasa</th>
                <th>Jumlah Halaman</th>
                <th>Durasi</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$job['nama_job']}}</td>
                @php
                $bahasa=$job->bahasa()->get()
                @endphp
                <td>{{$bahasa[0]['nama_kategori_bahasa']}}</td>
                <td style="padding-left: 55px">{{$job['jumlah_halaman']}}</td>
                <td>{{$job['durasi']}} hari</td>
                <td>Rp {{$job['total_harga']}}</td>
              </tr>
            </tbody>
          </table>
          <hr style="color: #AEAEAE;">
          <div class="me text-end me-4 mb-3" style="font-weight: 600;">
            <p class="pe-2" style="display: inline-block;">Total</p>
            <p style="display: inline-block;">Rp {{$job['total_harga']}}</p>
          </div>

        </div>
      </div>


    </div>
    <div class="col-md-9 mt-2" style="width: 77%;">

      <!--new_message_head-->

      <div class="card col-md-12 mt-4 shadow-sm">
 <table class="table table-bordered col-11">

            <thead class="card-header" style="border: transparent;">
              <tr class="" style="color: #62646a;">
                <th class="col-sm-6">File Asal</th>
                
            @auth
                @if (Auth::user() && Auth::user()->level == 'Client')
                  <th>File Terjemahan</th>
                @elseif (Auth::user() && Auth::user()->level == 'Translator')
                  <th>Upload Terjemahan</th>
                @endif
            @endauth

              </tr>
            </thead>
            
            <tbody>
              <tr>
                <td><a href="{{asset('data_file').'/'.$job['file']}} ">unduh file asal</a></td>
                
            @auth
                @if (Auth::user() && Auth::user()->level == 'Client' &&  $job['file_translated'] !=null)
                <td><a href="{{asset('data_file').'/'.$job['file_translated']}}">unduh file terjemahan</a></td>
                @elseif (Auth::user() && Auth::user()->level == 'Translator')
                @if($job['file_translated'] == null)
                  <td>
                      <form action="{{route('jobtransaction_post_file',$job['id'])}}" method="POST" enctype="multipart/form-data">
                          @csrf
                                    <input type="file" name="file" class="upload up" id="up" onchange="readURL(this);" /> 
                          <button class="btn btn-primary btn-sm"><i class=" fa fa-paper-plane"></i>Submit</button>
                      </form>
                  </td>
                  @elseif ($job['file_translated'] != null)
                  <td><a href="{{asset('data_file').'/'.$job['file_translated']}}">unduh file terjemahan</a></td>

                  @endif
                @endif
            @endauth
            </tbody>
          </table>
        
      </div>
      </div>
    </div>

    <div></div>

  </div>
  </div>
</body>

</html>

@include('includes.footer')
@endsection