@extends('layouts.app')
@section('content')
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <form>
                 <textarea style="color:black; font-size:16px;" cols="100" rows="20">
                      <?php
                            
                             // $filename = "<script>document.write(document.getElementById('get').text);</script>"; 
                        
                                $filename= $file_name; 
                                $fileopen = fopen('../storage/app/public/upload/'.$filename, 'r');
                                $filesize = filesize('../storage/app/public/upload/'.$filename);
                                $filetext = fread($fileopen,$filesize);
                                fclose($fileopen);
                                echo $filetext;
                            
                                       
                            ?>
                </textarea>
                     
                        <button style="background-color:purple; width:70px; color:white; border-radius:8px; border:2px solid white;">Save</button>
              <button style="background-color:purple; width:70px; color:white; border-radius:8px; border:2px solid white;">   <a style="color:white; text-decoration:none;" href="{{ asset('../storage/app/public/upload/'.$filename) }}">Run!</a></button>

                    </form>

                
            </div>
        </div>
               
    </div>
@endsection