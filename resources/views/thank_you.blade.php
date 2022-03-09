 @extends('layouts.main')

 @section('content')
     <section class="container mt-2 my-3 py-5">
         <div class="container mt-2 text-center">
             <h4>Thank you</h4>

             
                 @if (Session::has('order_id') && Session::get('order_id') != null)
                     <h4 style="color:blue; margin-top: 40px; margin-bottom: 40px" class="my-5">Order id: ${{ Session::get('order_id') }}
                     </h4>

                     <p style="margin-top:30px">Please keep order id in safe place for future reference</p>

                     <p style="margin-top:30px">We will deliver the order within 30 minute</p>
                 @endif
            
         </div>
     </section>

@endsection