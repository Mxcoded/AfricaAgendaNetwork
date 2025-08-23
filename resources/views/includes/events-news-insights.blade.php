<section class="events-news-insights-section py-5" style="background-color: #dce4db;" id="events-news-insights">
    <div class="container-fluid">
        <h2 class="text-center mb-5 fw-bold" style="color: #1a3c34;">Events, News & Insights</h2>
        <p class="text-center mb-5">Stay updated with our latest events, news, and expert insights on African development.</p>
        <div class="owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    @foreach ($posts as $post)
                        <div class="owl-item">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="{{ asset($post->featured_image) }}"  alt="Event Thumbnail" class="card-img-top">
                                <div class="card-body text-center">
                                    <h4 class="card-title">{{ $post->title}}</h4>
                                    <?php
                                        echo "<p class='card-text' style='white-space: nowrap;'>".$post->body."</p>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>