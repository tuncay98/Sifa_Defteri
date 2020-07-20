@extends("web.layout.home")

@section("content")
<section class="site-section">
    <div class="container">
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-4">Hi There! I'm Meagan Smith</h2>
                        <p class="mb-5"><img src="images/img_6.jpg" alt="Image placeholder" class="img-fluid"></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum minima eveniet recusandae
                            suscipit eum laboriosam fugit amet deleniti iste et. Ad dolores, necessitatibus non saepe
                            tenetur impedit commodi quibusdam natus repellat, exercitationem accusantium perferendis
                            officiis. Laboriosam impedit quia minus pariatur!</p>
                        <p>Dignissimos iste consectetur, nemo magnam nulla suscipit eius quibusdam, quo aperiam quia
                            quae est explicabo nostrum ab aliquid vitae obcaecati tenetur beatae animi fugiat officia id
                            ipsam sint? Obcaecati ea nisi fugit assumenda error totam molestiae saepe fugiat officiis
                            quam?</p>
                        <p>Culpa porro quod doloribus dolore sint. Distinctio facilis ullam voluptas nemo voluptatum
                            saepe repudiandae adipisci officiis, explicabo eaque itaque sed necessitatibus, fuga, ea
                            eius et aliquam dignissimos repellendus impedit pariatur voluptates. Dicta perferendis
                            assumenda, nihil placeat, illum quibusdam. Vel, incidunt?</p>
                        <p>Dolorum blanditiis illum quo quaerat, possimus praesentium perferendis! Quod autem optio
                            nobis, placeat officiis dolorem praesentium odit. Vel, cum, a. Adipisci eligendi eaque
                            laudantium dicta tenetur quod, pariatur sunt sed natus officia fuga accusamus reprehenderit
                            ratione, provident possimus ut voluptatum.</p>
                    </div>
                </div>
                <div class="row mb-5 mt-5">
                    <div class="col-md-12 mb-5">
                        <h2>Son Blog Postalar</h2>
                    </div>
                    <div class="col-md-12">
                        @foreach($data->sortByDesc('createdDate')->take(5) as $e)
                        <div class="post-entry-horzontal">
                            <a href="blog-single.html">
                                <div class="image" style="background-image: url({{Session::get('domain').$e->image}});"></div>
                                <span class="text">
                                    <div class="post-meta">
                                        <span class="category">{{$e->name}}</span>
                                        <span class="mr-2">{{ iconv('latin5','utf-8',strftime('%d %B %Y',strtotime($e->createdDate)))}} </span> &bullet;
                                        <!-- <span class="ml-2"><span class="fa fa-comments"></span> 3</span> -->
                                    </div>
                                    <h2>{{$e->title}}</h2>
                                </span>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>

            @include('web.layout.sidebar')
    </div>
</section>

@endsection