@include('frontend.header')
@include('frontend.main_search', ['country' => []])
@include('frontend.list_preview')
@include('frontend.category_browsing')

<div class="how_we_help">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
             <img src="{{asset('public/frontend/images/help_img.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <h3>How We Helping?</h3>
                <p>Our directory includes ONLY logistics and transportation related  businesses. You will find logistics companies (3PL companies), supply chain software developers, consulting firms, freight forwarders, shipping companies, warehousing providers, and any other business that has to do with storage, transportation or handling of goods. </p>
                <p>
In order to keep our directory useful and consistent, we screen every new submitted listing to make sure it fits one or more of our categories.</p>
            </div>
        </div>
    </div>
</div>
@include('frontend.testimony')
@include('frontend.footer')