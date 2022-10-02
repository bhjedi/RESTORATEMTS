<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>Product Detail Page</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">


    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/color1.css" media="screen" id="color">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        

        <style>
           @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=EB+Garamond:ital,wght@0,500;1,800&display=swap');


body {
background: #DFC2F2;
	background-image: linear-gradient( to right, #ffffb3,#ffe6e6);
	background-attachment: fixed;	
	background-size: cover;
  
	}
    .card-wrapper{
    max-width: 1100px;
    margin: 0 auto;
}
img{
    width: 100%;
    display: block;
}
.img-display{
    overflow: hidden;
}
.img-showcase{
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
}
.img-showcase img{
    min-width: 100%;
}
.img-select{
    display: flex;
}
.img-item{
    margin: 0.3rem;
}
.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3){
    margin-right: 0;
}
.img-item:hover{
    opacity: 0.8;
}
.product-content{
    padding: 2rem 1rem;
}
.product-title{
    font-size: 3rem;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    color: #12263a;
    margin: 1rem 0;
}
.product-title::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 4px;
    width: 80px;
    background: #12263a;
}
.product-link{
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 0.9rem;
    display: inline-block;
    margin-bottom: 0.5rem;
    background: #256eff;
    color: #fff;
    padding: 0 0.3rem;
    transition: all 0.5s ease;
}
.product-link:hover{
    opacity: 0.9;
}
.product-rating{
    color: #ffc107;
}
.product-rating span{
    font-weight: 600;
    color: #252525;
}
.product-price{
    margin: 1rem 0;
    font-size: 1rem;
    font-weight: 700;
}
.product-price span{
    font-weight: 400;
}
.last-price span{
    color: #f64749;
    text-decoration: line-through;
}
.new-price span{
    color: #256eff;
}
.product-detail h2{
    text-transform: capitalize;
    color: #12263a;
    padding-bottom: 0.6rem;
}
.product-detail p{
    font-size: 0.9rem;
    padding: 0.3rem;
    opacity: 0.8;
}
.product-detail ul{
    margin: 1rem 0;
    font-size: 0.9rem;
}
.product-detail ul li{
    margin: 0;
    list-style: none;
    background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
    background-size: 18px;
    padding-left: 1.7rem;
    margin: 0.4rem 0;
    font-weight: 600;
    opacity: 0.9;
}
.product-detail ul li span{
    font-weight: 400;
}
.purchase-info{
    margin: 1.5rem 0;
}
.purchase-info input,
.purchase-info .btn{
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;
}
.purchase-info input{
    width: 60px;
}
.purchase-info .btn{
    cursor: pointer;
    color: #fff;
}
.purchase-info .btn:first-of-type{
    background: #256eff;
}
.purchase-info .btn:last-of-type{
    background: #f64749;
}
.purchase-info .btn:hover{
    opacity: 0.9;
}
.social-links{
    display: flex;
    align-items: center;
}
.social-links a{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #000;
    border: 1px solid #000;
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}
.social-links a:hover{
    background: #000;
    border-color: transparent;
    color: #fff;
}

@media screen and (min-width: 992px){
    .card{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }
    .card-wrapper{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .product-imgs{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .product-content{
        padding-top: 0;
    }
    .wrapper {
  margin: 0 auto;
  max-width: 960px;
  width: 100%;
}

.master {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
}

h1 {
  font-size: 20px;
  margin-bottom: 20px;
}

h2 {
  line-height: 160%;
  margin-bottom: 20px;
  text-align: center;
}

.rating-component {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  margin-bottom: 10px;
}

.rating-component .status-msg {
  margin-bottom: 10px;
  text-align: center;
}

.rating-component .status-msg strong {
  display: block;
  font-weight: bold;
  margin-bottom: 10px;
}

.rating-component .stars-box {
  -ms-flex-item-align: center;
  align-self: center;
  margin-bottom: 15px;
}

.rating-component .stars-box .star {
  color: #ccc;
  cursor: pointer;
}

.rating-component .stars-box .star.hover {
  color: #ff5a49;
}

.rating-component .stars-box .star.selected {
  color: #ff5a49;
}

.feedback-tags {
  min-height: 119px;
}

.feedback-tags .tags-container {
  display: none;
}

.feedback-tags .tags-container .question-tag {
  text-align: center;
  margin-bottom: 40px;
}

.feedback-tags .tags-box {
  display: -webkit-box;
  display: -ms-flexbox;
  text-align: center;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.feedback-tags .tags-container .make-compliment {
  padding-bottom: 20px;
}

.feedback-tags .tags-container .make-compliment .compliment-container {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  color: #000;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.feedback-tags
  .tags-container
  .make-compliment
  .compliment-container
  .fa-smile-wink {
  color: #ff5a49;
  cursor: pointer;
  font-size: 40px;
  margin-top: 15px;
  -webkit-animation-name: compliment;
  animation-name: compliment;
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-iteration-count: 1;
  animation-iteration-count: 1;
}

.feedback-tags
  .tags-container
  .make-compliment
  .compliment-container
  .list-of-compliment {
  display: none;
  margin-top: 15px;
}

.feedback-tags .tag {
  border: 1px solid #ff5a49;
  border-radius: 5px;
  color: #ff5a49;
  cursor: pointer;
  margin-bottom: 10px;
  margin-left: 10px;
  padding: 10px;
}

.feedback-tags .tag.choosed {
  background-color: #ff5a49;
  color: #fff;
}

.list-of-compliment ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.list-of-compliment ul li {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  margin-bottom: 10px;
  margin-left: 20px;
  min-width: 90px;
}

.list-of-compliment ul li:first-child {
  margin-left: 0;
}

.list-of-compliment ul li .icon-compliment {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  border: 2px solid #ff5a49;
  border-radius: 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  height: 70px;
  margin-bottom: 15px;
  overflow: hidden;
  padding: 0 10px;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  width: 70px;
}

.list-of-compliment ul li .icon-compliment i {
  color: #ff5a49;
  font-size: 30px;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.list-of-compliment ul li.actived .icon-compliment {
  background-color: #ff5a49;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.list-of-compliment ul li.actived .icon-compliment i {
  color: #fff;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.button-box .done {
  background-color: #ff5a49;
  border: 1px solid #ff5a49;
  border-radius: 3px;
  color: #fff;
  cursor: pointer;
  display: none;
  min-width: 100px;
  padding: 10px;
}

.button-box .done:disabled,
.button-box .done[disabled] {
  border: 1px solid #ff9b95;
  background-color: #ff9b95;
  color: #fff;
  cursor: initial;
}

.submited-box {
  display: none;
  padding: 20px;
}

.submited-box .loader,
.submited-box .success-message {
  display: none;
}

.submited-box .loader {
  border: 5px solid transparent;
  border-top: 5px solid #4dc7b7;
  border-bottom: 5px solid #ff5a49;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 0.8s linear infinite;
  animation: spin 0.8s linear infinite;
}

@-webkit-keyframes compliment {
  1% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  25% {
    -webkit-transform: rotate(-30deg);
    transform: rotate(-30deg);
  }

  50% {
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
  }

  75% {
    -webkit-transform: rotate(-30deg);
    transform: rotate(-30deg);
  }

  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@keyframes compliment {
  1% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  25% {
    -webkit-transform: rotate(-30deg);
    transform: rotate(-30deg);
  }

  50% {
    -webkit-transform: rotate(30deg);
    transform: rotate(30deg);
  }

  75% {
    -webkit-transform: rotate(-30deg);
    transform: rotate(-30deg);
  }

  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

}
   





        </style>
    </head>
    <body class="antialiased">
    <div class = "card-wrapper">
  <div class = "card">
    <!-- card left -->
    <div class = "product-imgs">
      <div class = "img-display">
        <div class = "img-showcase">
        @if(!empty($restaurant[0]->medias))
   
	<img src="{{url('public/Image/'.$restaurant[0]->medias[0]->image)}}" alt="Image"/>
 @endif
        </div>
      </div>

      <div class = "img-select">
        
        <div class = "img-item">
          <a href = "#" data-id = "2">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "3">
          </a>
        </div>
        <div class = "img-item">
          <a href = "#" data-id = "4">
          </a>
        </div>
      </div>
      
    </div>
    <!-- card right -->
    <div class = "product-content">
      <h2 class = "product-title">Restaurant Details</h2>
      <a href="{{ route('homepage') }}" class = "product-link">Retour</a>
      <div class = "product-rating">
      <span>{{$restaurant[0]->name}} </span> <br />
       
        <span>4.7(21) Moyenne du restaut </span>
      </div>

      

      <div class = "product-detail">
      <div class="wrapper">
  <div class="master">
    <h1>Review And rating</h1>
    <h2>How was your experience about our restaurant?</h2>

   

   <div class="feedback-tags">
      
      
      <div class="tags-box">
      @if($checkedAuth) 
      <form action="{{ route('homepage.addReview') }}" method="GET">

      <input type="text" class="tag form-control"  type="number" name="note" id="inlineFormInputName" placeholder="SVP entrer une note sur 10">

        <input type="text" class="tag form-control" name="message" id="inlineFormInputName" placeholder=" SVP entrer un review">
        <input type="hidden" name="restaurant_id" value="{{ $restaurant[0]->id }}" />
      </div>
      
    </div>
    <button type="submit"
                    class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Save
     </button>
</form>
@endif
    <!-- <div class="button-box">
      <input type="submit" class=" done btn btn-warning" disabled="disabled" value="Add review" />
    </div> -->

  <div>
    <h4> Liste de reviews sur le restaurant </h4>
    @if($restaurant[0]->reviews) @foreach($restaurant[0]->reviews as $review)
     <b>{{$review->message}}</b> <br /> 
     @endforeach @endif 
     <br />
     <h4>Liste de note sur le restaurant</h4>
     @if($restaurant[0]->reviews) @foreach($restaurant[0]->reviews as $review)
     <b>{{$review->note}} ({{$restaurant[0]->user->name}})  <form action="{{ route('homepage.delete') }}" method="GET" enctype="multipart/form-data" >
     <input type="hidden" class="tag form-control" name="review_id" id="inlineFormInputName" value="{{ $review->id }}" placeholder=" Repondre">
     <input type="hidden" class="tag form-control" name="user_id" id="inlineFormInputName" value="{{ $review->user_id }}" placeholder=" Repondre">


<button type="submit"
           class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
               Suprimmer 
           </button></form> </b>  
  @if(isset($authuserRole) && $authuserRole->roles[0]->name=="Restaurateur" && $restaurant[0]->user->id == $authuserRole->id  )   <form action="{{ route('homepage.answer') }}" method="GET" enctype="multipart/form-data" >
      
      <input type="hidden" class="tag form-control" name="review_id" id="inlineFormInputName" value="{{ $review->id }}" placeholder=" Repondre">
      <input type="hidden" class="tag form-control" name="user_id" id="inlineFormInputName" value="{{ $restaurant[0]->user_id }}" placeholder=" Repondre">

     <input type="text" class="tag form-control" name="response" id="inlineFormInputName" placeholder=" Repondre">

         <button type="submit"
                    class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                        Repondre 
                    </button></form>  @endif

            <p> Reponse : {{$review->response}} </p>
                    
     @endforeach @endif 

    </div>

    <div class="button-box">
      <input type="submit" class=" done btn btn-warning" disabled="disabled" value="Add review" />
    </div>

    <div class="submited-box">
      <div class="loader"></div>
      <div class="success-message">
        Thank you!
      </div>
    </div>
  </div>

</div>
      </div>

     

    </div>
  </div>
</div>
    </body>
    
</html>

