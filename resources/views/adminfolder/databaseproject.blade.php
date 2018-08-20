@extends('layouts.app')
@section('content')
 
    <div class="container-fluid">
                     
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                            <table id="project_table" class="table table-bordered" style=" background-color:#0EBFE9; color:white"> 
                                <thead> 
                                    <tr> 
                                       
                                         <th>Name</th> 
                                         <th>Description</th> 
                                         <th>User_id</th> 
                                         <th>Created_at</th>
                                         <!--<th>Update Time</th>-->
                                         <th>Updated_at</th>
                                         <!--<th>Action</th>-->
                                         
                                    </tr>
                                </thead> 
                                
                                <tbody> 
                                   
                                
                                </tbody> 
                            </table>
                </div>
            </div>
        </div>
            </div>
                    

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#project_table').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "ajax": "{{ route('projectDatabase.fetchData') }}",
                        "columns":[
                            
                             { "data": "name" },
                            { "data": "description" },
                            { "data": "user_id" },
                            { "data": "created_at" }, 
                          { "data": "updated_at" },                                          
                          //  { "data": "Checkout_time" },
                         //   { "data": "action" }
                        ]
                    });
                });


                
            </script>
@endsection 



      
        



