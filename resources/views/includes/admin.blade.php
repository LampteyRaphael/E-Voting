<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link " id="final" href="{{route('final.index')}}" role="tab" aria-controls="pills-home" aria-selected="true">Final Result</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" id="chairman" href="{{route('executiveChairman.index')}}"  aria-controls="pills-chairman" aria-selected="false">Chairman</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="secretary" href="{{route('executiveSecretary.index')}}" role="tab" aria-controls="pills-secretary" aria-selected="false">Secretary</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="organizer"  href="{{route('executiveOrganizer.index')}}" role="tab" aria-controls="pills-contact" aria-selected="false">Organizer</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="finance" href="{{route('executiveFinance.index')}}" role="tab" aria-controls="pills-contact" aria-selected="false">Finance Secretary</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="member" href="{{route('executiveMember.index')}}" role="tab" aria-controls="pills-contact" aria-selected="false">Executive Member</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i>Settings</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('pdf.index')}}">Final PDF</a>
            <a class="dropdown-item" href="{{route('chairman.create')}}">Add Chairman Nominee</a>
            <a class="dropdown-item" href="{{route('secretary.create')}}">Add Secretary Nominee</a>
            <a class="dropdown-item" href="{{route('financial.create')}}">Add Financial Secretary Nominee</a>
            <a class="dropdown-item" href="{{route('organizer.create')}}">Add Organizer Nominee</a>
            <a class="dropdown-item" href="{{route('member1.create')}}">Add Executive Member Nominee</a>
            <a class="dropdown-item" href="{{route('votersRegister.index')}}">Voters List</a>
            <a class="dropdown-item" href="{{route('votersRegisterPDF.index')}}">Voters List PDF</a>
            <a class="dropdown-item" href="{{route('voters-user.index')}}">Candidate Registration</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item disabled" href="#">Designer:raphlamptey@gmail.com</a>
        </div>
    </li>
</ul>

