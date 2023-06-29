<x-layout>
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
          <div class="row gy-4 d-flex justify-content-between">
  
  
            <div class="col"></div>
  
            <div class="col-lg-6 flex-column justify-content-center">
              
              <center>
                
                <h2 data-aos="fade-up">Here is your QR-Code</h2>
                
                <img src="/qr_images/{{$qr_id}}.svg" class="img-fluid mb-3 mb-lg-0 home-qr" alt="" style="padding: 20px; background: #fff;">
  
                <br>
                <br>
  
                <a href="/download/{{$qr_id}}" type="submit" class="btn btn-primary btn-small">Download</a>
  
                <br>
                <br>
  
                <p data-aos="fade-up" data-aos-delay="100">Send a copy to your email address <br> {{ $qr_data }}</p>
                
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
</x-layout>