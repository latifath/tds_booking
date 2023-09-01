<style>
  .cards-wrapper {
  display: flex;
  justify-content: center;
}
.carousel-inner {
  padding: 1em;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 5vh;
  height: 5vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
#am{
    padding-right: 10px;
}

@media (min-width: 768px) {
  .card img {
    height: 11em;
  }
}
</style>

<div class="col-md-8 offset-sm-2 mb-5 mt-3">
    <h2 style="margin: 5px 0 20px 0; color: #dca73a; text-align:center; padding-top: 50px;">Nos partenaires</h2>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
                <div class="room-itemn" id="am">
                    <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                </div>

                <div class="room-itemn" id="am">
                    <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                </div>

                <div class="room-itemn" id="am">
                    <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
                <div class="room-item" id="am">
                    <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                </div>

                <div class="room-item" id="am">
                    <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                </div>

                <div class="room-item" id="am">
                    <img src="{{ asset('assets/img/blog/blog-10.jpg') }}" alt="">
                </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</div>
