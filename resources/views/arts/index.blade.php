@extends('layouts.app') 
@extends('layouts.header')
@section('content')
    <h1>Arts</h1>
    @if(count($arts) > 0)

        
             <div class="rTable">
                <div class="rTableRow">
                <div class="rTableHead">ID</div>
                <div class="rTableHead">Accession Number</div>
                <div class="rTableHead">Name</div>
                <div class="rTableHead">Artist</div>
                <div class="rTableHead">Location</div>
                <div class="rTableHead">Archieve</div>
                <div class="rTableHead">Tracker_ID</div>
                <div class="rTableHead">Image</div>
                <div class="rTableHead">Created At</div>
                
                
            </div>
            @foreach($arts as $art)
            
                    <div class="rTableRow">
                    <div class="rTableHead">{{$art->id}}</div>
                    <div class="rTableHead">{{$art->Accession_number}}</div>
                    <div class="rTableHead">{{$art->Name}}</div>
                    <div class="rTableHead">{{$art->Artist}}</div>
                    <div class="rTableHead">{{$art->Location}}</div>
                    @if(($art->Archieve)==1)
                    <div class="rTableHead">True</div>
                    @else
                    <div class="rTableHead">False</div>
                    @endif
                    <div class="rTableHead">{{$art->Tracker_ID}}</div>
                    <div class="rTableHead">{{$art->Image}}</div>
                    <div class="rTableHead">{{$art->created_at}}</div>

                                        </div>
            @endforeach    
                                    </div>
    @else
        <p> No arts found</p>
    @endif
@endsection

<style>
        .rTable {
              display: table;
              width: 100%;
        }
        .rTableRow {
              display: table-row;
        }
        .rTableHeading {
              display: table-header-group;
              background-color: #ddd;
        }
        .rTableCell, .rTableHead {
              display: table-cell;
              padding: 3px 10px;
              border: 1px solid #999999;
        }
        .rTableHeading {
              display: table-header-group;
              background-color: #ddd;
              font-weight: bold;
        }
        .rTableFoot {
              display: table-footer-group;
              font-weight: bold;
              background-color: #ddd;
        }
        .rTableBody {
              display: table-row-group;
        }
        </style