@extends('layouts.app')
@section('content')
   <table class="table table-borderless">
{{--           <div class="card text-white bg-primary" style="max-width:18rem; margin:0">--}}
{{--               <div class="card-header">Your Vote Summary</div>--}}
{{--           </div>--}}
       <span class="badge badge-pill badge-warning">Your Vote Summary</span>

       <thead>
       <tr>
           <th scope="col">Nominees</th>
           <th scope="col">Image</th>
       </tr>
       </thead>
       <tbody>
        <tr>
            <th>Chairmanship</th>
            <td>{{$chairman}}</td>
        </tr>
        <tr>
            <th>Secretary</th>
            <td>{{$secretary}}</td>
        </tr>
        <tr>
            <th>Financial Secretary</th>
            <td>{{$finance}}</td>
        </tr>
        <tr>
            <th>Organizer</th>
            <td>{{$organizer}}</td>
        </tr>
        <tr>
            <th>Member</th>
            <td>{{$member}}</td>
        </tr>
   </tbody>
   <tfoot>
   <tr>
       <td colspan="4">
           <a  href="{{ route('logout') }}" class="btn btn-danger float-right"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
               Exit
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
           </form>
       </td>
   </tr>
   </tfoot>
</table>

@endsection
