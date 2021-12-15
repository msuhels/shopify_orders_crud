
<!DOCTYPE html>
<html>
<head>
    <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<h3>Products</h3>
    <div class="card shadow bg-body rounded" >
      <div class="card-header bg-transparent">
    <div class="container"></div>
    <div id="exTab1" class="container"> 
        <ul  class="nav nav-tabs card-header-tabs">
            <li class="nav-item active"><a  href="#1a" class="nav-link active" data-toggle="tab">All</a></li>
            <li class="nav-item"><a href="#active_products" id="" class="nav-link" data-toggle="tab">Active</a></li>
            <li class="nav-item"><a href="#draft_products" id="draft_products" class="nav-link" data-toggle="tab">Draft</a></li>
            <li class="nav-item"><a href="#4a" id="" class="nav-link" data-toggle="tab">Archived</a></li>
            <li class="nav-item"><a href="#4a" id="" class="nav-link" data-toggle="tab">Ozsale</a></li>
            <li class="nav-item"><a href="#4a" id="" class="nav-link" data-toggle="tab">Kogan</a></li> 
        </ul>
            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1a">
                <div class="card-body ">
                <div class="row">
                    <div class="col-md-5 search">
                        <div class="form"><i class="fa fa-search"></i><input type="text" class="form-control form-input" placeholder="Filter Products"></div>  
                    </div>
                    <div class="col-md-5 dropdown">
                        <div class="dropdown">
                        <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">  
                              <button class="btn btn-outline-secondary mb-3 btn-group-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Product Vender
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                              <button class="btn btn-outline-secondary mb-3 btn-group-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tagged With
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                              <button class="btn btn-outline-secondary mb-3 btn-group-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                               Status
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                              <button class="btn btn-outline-secondary mb-3 btn-group-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                More Filters
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </div>
                            </div>
                    </div> 
                            <div class="col-md-2 submit">
                             <div class="buttons">
                               <div class="btn-group mb-3 btn-group-sm save" role="group" aria-label="Basic example">
                                 <a href="#" class="btn btn-icon btn-outline-secondary save"><i class="fa fa-star"></i>Save</a>
                                 </div>
                                 <div class="btn-group mb-3 btn-group-sm sort" role="group" aria-label="Basic example">
                                 <a href="#" class="btn btn-icon btn-outline-secondary sort"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>Sort</a>
                                 </div>
                             </div>

                        </div>

                            <table class="table">
                              <thead>
                              
                                <tr>
                                  <th scope="col">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </th>
                                  <th scope="col" class="img"></th>
                                  <th scope="col">Products</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Inventory</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Vender</th>
                                </tr>
                              </thead>
                              <tbody>
                            @if(! $listData->isEmpty())
                            @foreach($listData as $list)
                            <?php if ( $list->order_status == 'fulfilled'):
                                $color = 'badge rounded-pill bg-success';
                                elseif ( $list->order_status == 'unfulfilled'):
                                $color = 'badge rounded-pill bg-secondary';
                                else:
                                $color = 'none';
                                endif;
                                ?>
                             <?php if ( $list->order_status == 'fulfilled'):
                                $order_s = 'Active';
                                elseif ( $list->order_status == 'unfulfilled'):
                                $order_s = 'Archived';
                                else:
                                $order_s = 'none';
                                endif;?>
                                <tr>
                                  <td scope="row" class="check_box">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </td>
                                  <td class="img"><img src="{{ asset('img/download.jpg') }}" height="50" width="50"></td>
                                  <td>{{$list->title}}</td>
                                  <td><div class="{{$list->order_status}} {{$color}}" style="opacity: 0.5; color: #000;">{{$order_s}}</div></td>
                                  <td style="color:#D50000;">{{$list->quantity}} in stock</td>
                                  <td>Knife bag</td>
                                  <td>Boldric</td>
                                </tr>
                                
                             @endforeach
                            @endif
                              </tbody>
                             
                            </table>
                             <div class="d-flex justify-content-center">
                        {{ $listData->links('pagination::bootstrap-4') }}
                    </div>
              </div>
            </div>
  </div>
              <div class="tab-pane" id="active_products">
               <!--  <?php //echo "<pre>";
                //print_r($listTest); ?> -->
                <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </th>
                                  <th scope="col" class="img"></th>
                                  <th scope="col">Products</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Inventory</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Vender</th>
                                </tr>
                              </thead>
                              <tbody>
                            @foreach($listTest as $list)
                                <tr>
                                  <td scope="row" class="check_box">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </td>
                                  <td class="img"><img src="{{ asset('img/download.jpg') }}" height="50" width="50"></td>
                                  <td>{{$list->title}}</td>
                                  <td><div class="{{$list->order_status}} {{$color}}" style="opacity: 0.5; color: #000;">{{$list->order_status}}</div></td>
                                  <td style="color:#D50000;">{{$list->quantity}} in stock</td>
                                  <td>Knife bag</td>
                                  <td>Boldric</td>
                                </tr>
                            @endforeach
                              </tbody>
                </table>

              </div>

              <div class="tab-pane" id="draft_products">
                             <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </th>
                                  <th scope="col" class="img"></th>
                                  <th scope="col">Products</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Inventory</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Vender</th>
                                </tr>
                              </thead>
                             <tbody id="events_table">
                                                   
                              </tbody>
                </table>
                <div class="d-flex justify-content-center">
                </div>
              </div>

              <div class="tab-pane" id="4a">
                              <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </th>
                                  <th scope="col" class="img"></th>
                                  <th scope="col">Products</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Inventory</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Vender</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td scope="row" class="check_box">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </td>
                                  <td class="img"><img src="" height="50" width="50"></td>
                                  <td></td>
                                  <td><div class="" style="opacity: 0.5; color: #000;"></div></td>
                                  <td style="color:#D50000;"></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </tbody>
                              
                </table>
                <div class="d-flex justify-content-center">
                </div>
              </div>

              <div class="tab-pane" id="4a">
                              <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </th>
                                  <th scope="col" class="img"></th>
                                  <th scope="col">Products</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Inventory</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Vender</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td scope="row" class="check_box">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                  </div>
                                  </td>
                                  <td class="img"><img src="" height="50" width="50"></td>
                                  <td></td>
                                  <td><div class="" style="opacity: 0.5; color: #000;"></div></td>
                                  <td style="color:#D50000;"></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                              </tbody>
                </table>
                <div class="d-flex justify-content-center">
                </div>
              </div>
            </div>

    </div>

</div>
 <br>
</body> 
</html>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js"></script>

    <script type="text/javascript">

     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('.nav-link').on('click', function() {
        $('a.nav-link.active').removeClass('active');
        $(this).addClass('active');
        });

    $( "#draft_products" ).click(function(order_status = '') {
          $.ajax({
                url : "/filter",
                method : "GET",
                dataType : "text",
                data:'order_status=' + order_status ,
                success:function(data){ 
                 console.log(data);
                 //var len = data.length;
                    
               if(data){
                 var len = data.length;
                // var txt = "";
                if(len > 0){
                    $.each(JSON.parse(data), function( index, value ) {
                               var row = $("<tr><td>" + value + "</td><td>" + value + "</td></tr>");
                               $("#events_table").append(row);
                            });
                    
                }
            }

           
                },
                error : function (errorThrown){
                    alert('Error ... ');
                }
            });

    });


});

</script>

<style type="text/css">
.card-body {
    padding: 0rem 0rem !important;
    padding-top: 20px !important;
}
    .col-md-5.dropdown {
    padding-left: 0px;
}
    a.btn.btn-icon.btn-outline-secondary.save, a.btn.btn-icon.btn-outline-secondary.sort {
    padding-left: 15px;
    padding-right: 15px;
}
    .col-md-2.submit {
    margin-left: -45px;
}
    td.img, td.check_box {
    width: 0px;
}
a.nav-link {
    color: #A6A4A4;
}
a.nav-link.active {
    color: black;
}
   .card.shadow.bg-body.rounded {
    border-radius: 0.5rem !important;
}
.nav-link.active {
    border-bottom: 5px solid green !important;
    background-color: none;
    border-top:none !important;
    border-right:none !important;
    border-left:none !important;

}



.form {
    position: relative
}
.form .fa-search {
    position: absolute;
    top: 6px;
    left: 8px;
    color: #9ca3af
}
.form span {
    position: absolute;
    right: 17px;
    top: 13px;
    padding: 2px;
    border-left: 1px solid #d1d5db
}
.left-pan {
    padding-left: 7px
}
.left-pan i {
    padding-left: 10px
}
.form-input {
    height: 30px;
    text-indent: 15px;
    border-radius: 10px
}

</style>

<!-- <table 
    id="" 
    class="table table-striped table-bordered upper-case" style="width:100%">
            <thead>
                <tr>
                <th>Note</th>
                <th>Order Status</th>
                <th>Date Purchased</th>
                <th>Order No.</th>  
                <th>Quantity</th>  
                <th>SKU</th>  
                <th>Barcode</th>  
                <th>Product Image</th>
                <th>Product Title</th>
                <th>Ship Type</th>
                <th>Risk</th>
                <th>Country</th>
                </tr>
            </thead>
        <tbody>
        @if(! $listData->isEmpty())
                @foreach($listData as $list)
                <?php if ( $list->order_status == 'fulfilled'):
                            $color = 'green';
                            elseif ( $list->order_status == 'unfulfilled'):
                            $color = 'none';
                            else:
                            $color = 'none';
                            endif;?>

                <?php if ( $list->quantity > '1'):
                            $color_qty = 'blue';
                            elseif ( $list->quantity == '1'):
                            $color_qty = 'none';
                            else:
                            $color_qty = 'none';
                            endif;?>

                <?php if ( $list->ship_time > 'Australia Post - Standard'):
                            $color_qty = 'blue';
                            elseif ( $list->ship_time == 'test'):
                            $color_qty = 'none';
                            else:
                            $color_qty = 'none';
                            endif;?>

                <?php if ( $list->risk == 'high'):
                            $color_risk = 'yellow';
                            elseif ( $list->ship_time == 'test'):
                            $color_risk = 'none';
                            else:
                            $color_risk = 'none';
                            endif;?>

                <?php if ( $list->order_status == 'fulfilled'):
                            $order_s = 'shipped';
                            elseif ( $list->order_status == 'Unfulfilled'):
                            $order_s = 'unshipped';
                            else:
                            $order_s = 'none';
                            endif;?>
                <tr style="background-color: {{$color}}">
                    <td>{{$list->note}}</td>
                    <td>{{$order_s}}</td>
                    <td>{{$list->created_at}}</td>
                    <td>{{$list->order_no}}</td>
                    <td style="background-color: {{$color_qty}}">{{$list->quantity}}</td>
                    <td>{{$list->sku}}</td>
                    <td>{{$list->barcode}}</td>
                    <td><img src="{{ asset('img/' . $list->image) }}" height="50" width="50"></td>
                    <td>{{$list->title}}</td>
                    <td style="background-color: {{$color_qty}}">{{$list->ship_time}}</td>
                    <td style="background-color: {{$color_risk}}">{{$list->risk}}</td>
                    <td>{{$list->country}}</td>
                </tr>
                @endforeach
            @endif
            </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $listData->links('pagination::bootstrap-4') }}
    </div> -->
    {{--
    <!-- <button  class="btn lni lni-trash edit" data-id="{{ $list['id'] }}">
                        Edit
                    </button>

                    <button  class="btn lni lni-trash delete" data-id="{{ $list['id'] }}">
                        Delete
                    </button> -->
                    --}}
        




         