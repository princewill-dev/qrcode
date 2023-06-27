<x-layout>


  @if (session()->has('success'))

    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">


          <div class="col"></div>

          <div class="col-lg-6 flex-column justify-content-center">
            
            <center>
              
              <h2 data-aos="fade-up">Here is your QR-Code</h2>
              
              <img src="images/qr-code.jpg" class="img-fluid mb-3 mb-lg-0 home-qr" alt="">

              <br>

              <a href="#" type="submit" class="btn btn-primary btn-small">Download</a>

              <br>
              <br>

              <p data-aos="fade-up" data-aos-delay="100">Send a copy to your email address</p>
              
            </center>

            <form action="{{ route('convertAction') }}" method="POST" class="form-search d-flex align-items-stretch mb-3">
              @csrf
              <input type="text" name="content" class="form-control" placeholder="Enter email address">
              <button type="submit" class="btn btn-primary">Get</button>
            </form>

          </div>

          <div class="col"></div>

        </div>
      </div>
    </section>

  @else

    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            
            <center>
              <h2 data-aos="fade-up">Your Lightning Fast <br> QR-Code Generator</h2>
              <p data-aos="fade-up" data-aos-delay="100">Unlock Seamless Sharing: Transform Any Text or Link into Scannable QR Codes with Ease!</p>
            </center>

            <form action="{{ route('convertAction') }}" method="POST" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <input type="text" name="content" class="form-control" placeholder="Paste link or text">
              <button type="submit" class="btn btn-primary">Get</button>
            </form>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

              <div class="col-lg-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Geneared</p>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Downloads</p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6 order-1 order-lg-2 hero-img " data-aos="zoom-out">
            <center>
              <img src="images/qr-code.jpg" class="img-fluid mb-3 mb-lg-0 home-qr" alt="">
            </center>
          </div>

        </div>
      </div>
    </section>

  @endif



</x-layout>