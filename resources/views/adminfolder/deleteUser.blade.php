@extends('layouts.app')
@section('content')

       <div class="container">
            
          <div class="row">
 
              <div class="col-md-1 col-sm-12 col-xs-12">
                </div>

              <div class="col-md-10 col-sm-12 col-xs-12">
                  <center><h2 style="font-family: 'Goudy Bookletter 1911';">Admin Delete User's Page</h2></center>
                <!--  <img class="" alt="logo" src="{{asset('externalFolder')}}/img/construction.jpg" />-->
             
                <table border="1">
                    <tr>
                        <th><center>Name</center></th>
                         <th><center>Email Address</center></th>
                          <th><center>Action</center></th>
                    </tr>
                    <tbody>
                        <tr>
                            <td><center>Owolabi Toba</center></td>
                            <td><center>owolabitoba31@yahoo.com</center></td>
                            <td><center><button style="background-color:purple; color:white; width:120px; border-radius:10px; font-family: 'Goudy Bookletter 1911', serif; border:1px solid purple">Delete</button></center></td>
                        </tr>

                         <tr>
                            <td><center>Anifowoshe Gbenga</center></td>
                            <td><center>anifowoshegbenga11@yahoo.com</center></td>
                            <td><center><button style="background-color:purple; color:white; width:120px; border-radius:10px; font-family: 'Goudy Bookletter 1911', serif; border:1px solid purple">Delete</button></center></td>
                        </tr>

                         <tr>
                            <td><center>Hassan Tumise</center></td>
                            <td><center>tumisehassan@gmail.com</center></td>
                            <td><center><button style="background-color:purple; color:white; width:120px; border-radius:10px; font-family: 'Goudy Bookletter 1911', serif; border:1px solid purple">Delete</button></center></td>
                        </tr>

                         <tr>
                            <td><center>Saliu Moshood</center></td>
                            <td><center>saliu1@yahoo.com</center></td>
                            <td><center><button style="background-color:purple; color:white; width:120px; border-radius:10px; font-family: 'Goudy Bookletter 1911', serif; border:1px solid purple">Delete</button></center></td>
                        </tr>

                          
                    </tbody>
                    
                </table>
                </div>

                

                <div class="col-md-1 col-sm-12 col-xs-12">
                  
                </div>
            </div>
        </div>

@endsection