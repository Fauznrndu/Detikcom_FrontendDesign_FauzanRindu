@extends('layouts.main')

@section('container')

  <div class="card border  mb-5">
      <div class="row g-0">
        <div class="col-md-5 align-self-center">
          <div class="card-body">
            <h1 class="card-title text-primary">SUDIRMAN</h1>
            <h1 class="card-title text-success">RUN 2023</h1>
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0 ">
                <h6 class="card-title fw-light mt-2">Presented by.</h6>
              </div>
              <div class="flex-grow-1 ms-1">
                  <img src="https://akcdn.detik.net.id/community/media/visual/2020/09/17/logo-detikhealth.png?d=1" alt="..."  style="width: 128px">
              </div>
            </div>
            <button type="button" class="btn btn-warning btn-sm text-white mt-5">TENTANG ACARA</button>
          </div>
        </div>
        <div class="col-md-7">
          <img src="https://img.freepik.com/premium-vector/man-woman-running_113065-4.jpg?w=826" class="img-fluid rounded-start" alt="..." >
        </div>
      </div>
  </div>

  <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-6 p-5">
          <div class="card bg-primary p-3 rounded-3" style="height: 100%">
              <div class="card border rounded-3" >
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5609.477949664951!2d106.81980408508406!3d-6.197583777490046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5561518a139%3A0x2911f3a14f98eea7!2sBundaran%20HI!5e0!3m2!1sen!2sid!4v1704267056513!5m2!1sen!2sid" style="border:0"  class="rounded-3"></iframe>
              </div>
              <div class="card-body ps-0 ">
                <h5 class="card-title text-white">10K FUN RUN</h5>
                <p class="card-text text-white">Dimulai pukul 6 pagi, nikmati pemandangan kota di pagi hari dimulai dari Bundaran HI hingga Patung Pemuda Membangun di Senayan lalu kembali lagi ke bundaran HI!</p>
              </div>
            </div>
        </div>
        <div class="col-md-6 border p-5">
          <div class="row row-cols-1 row-cols-md-1 g-4">
              <div class="col">
                <div class="card bg-primary rounded-3">
                  <div class="card-body">
                    <h5 class="card-title text-white">GRATIS DAN BERHADIAH</h5>
                    <p class="card-text text-white">Pendaftaran gratis! Ajak keluarga anda dan menangkan hadiah total puluhan juta rupiah doorprize menarik!</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card bg-primary rounded-3">
                  <div class="card-body">
                    <h5 class="card-title text-white">50+ TENANT BAZZAR</h5>
                    <p class="card-text text-white">Dapatkan promo menarik pada booth-booth tenant bazzar Sudirman Run 2023 mulai dari F&B hingga fashion</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card p-3 bg-primary ">
                  <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img src="https://inputrakyat.co.id/wp-content/uploads/2018/04/IMG-20180404-WA0006.jpg" alt="..." class="rounded-3" style="width: 128px" >
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h5 class="card-title text-white">SPECIAL <br> PERFOMANCE</h5>
                        <p class="card-text text-white">Saksikan penampilan dari RAN, Ayu Ting Ting, Diskoria, Serta hiburan lainnya!</p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
  </div>

  <div class="border text-center mb-5">
    <button type="button" class="btn btn-warning btn-sm text-white">DAFTAR SEKARANG</button>
  </div>

  <div class="card bg-primary mb-5">
    <div class="card-body border text-center">
      <h5 class="card-title text-white">DIDUKUNG OLEH</h5>
  </div>
    
    <div id="carouselExampleAutoplaying" class="carousel slide border" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="https://d26bwjyd9l0e3m.cloudfront.net/wp-content/uploads/2015/07/Golden-Gate-Ventures-logo.jpg" class="card-img-top mt-4" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://www.alphajwc.com/wp-content/uploads/2022/07/REALIZING-ambition-for-legacy-and-impact.png" class="card-img-top " alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/500_Startups_-_logo.png/220px-500_Startups_-_logo.png" class="card-img-top w-50 m-auto" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://media.licdn.com/dms/image/C5616AQF_-ztu3O3lFg/profile-displaybackgroundimage-shrink_200_800/0/1630578712418?e=2147483647&v=beta&t=dFJrsGiwTslDcH91jYWV5yMp-mgqKPzDjMNjgr6LQoA" class="card-img-top mt-5" alt="...">
              </div>
            </div>
          </div>

        </div>
    
        <div class="carousel-item" data-bs-interval="2000">
          <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="https://awsimages.detik.net.id/visual/2022/06/14/logo-sequoia_169.jpeg?w=400&q=90" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="https://onecms-res.cloudinary.com/image/upload/v1666100617/mediacorp/tdy/image/2022/10/18/sginnovate-logo-horizontal-01.jpg" class="card-img-top" alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100 ">
                <img src="https://media.licdn.com/dms/image/C560BAQHoxsdQV9ceyA/company-logo_200_200/0/1631601467153/wavemakerpartners_logo?e=2147483647&v=beta&t=3Ouq_-jQ3bCG3h0lEFCg-7k7FsK16tpwHM0lUsbsIyU" class="card-img-top w-50 m-auto"  alt="...">
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAxlBMVEX///8kMCwAAAAiMSwfMCr9//4AGxQdJCETIh2RmJb//f4ZKiSwtbQKHRhka2kiLioAHhXq6+vX2NgdKiYxQDtOV1TIzMpBTEgADwQAGBETJiAYJiH3+PgoLiwAEwsAHBWMj47j5OQKJBygpKPx9/WgoKAoOTPBxsXP1dODh4ZodHBTXlrCwcFzfHldZWJDT0s3Qj6mpaZ5hYATGhhtcXClr6zn4+Q6QkAACQBeYmGzv7qFkY1reHMbMipNUVCVlJUxNzW7u7vWI4fEAAAICklEQVR4nO2caXebOhCG5bCUgDGbDWYJNtjxGjtLszhN2zT//09dSNrUIxZjAb73njPPp54aGF4kzYxGUghBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEARBEKRpZCILgnA6c7L8abdtW0LwTut2CgzLbRqO5pPlau30eY7nZs6gt5zMoxbN7Vu+Ot9sr/scx81u2rJr3m69oSv5vmVpH1iWL7mhO3i1DUJyus6ZOBIr4P440NWN7iYORenTcGpXDL3VbZRrlo3o8kaPLa2ThxWL/HPXyN501sm/gYLvlypcfFd0JedBmh/rzqvZjEJ7K8Y8xxW9YtJ1LNXddoOMwkqUKrQHoc93Lgrs8nE4uKXNHknyiWwntCq86JfRmd20QvN5eMi0pQ7voloePVq5VfSlb/qV6jE1FcrC5Ve/sOPs4d7XEfggJZ2k2ot6Y+remgqNZ7eKvkShnXt/FeTgfljtLRM4nXbg9RSanl/x/hmzQGI4UmWBHWVL315L4SKu5IgT1EtmgRGnVOyhKe5VkwrNuOLo72jeI6M+OfpR1ci7oRuBDk01FEZu1RbsKMx+xnhSisQoXoICEwBpknkCs0J56uR+XP7dMJV4sPuZde5At6Rw1+8tx+PxZj0bhqr/51V2hky/KKVQLUDkM224iXMsq7uL58Twcs3tXOnzC2g3rFnNuZuxwXGeu56YexeZb0snlPgO1/Huso8ACvmLbiFTeJ/8LWtbCXt/E8PAHjuux/NckuzErH5mkTXS8eINFRCSjy9EE0ePO/rikMIvxcZAG8rCNNN7NP3+Mf1l7ypzPHtPRYY5CXEV5OvMQNDCrVlwsbk5c3L+v7JC+DTyQscoK/XT8t6HeJ95B2+DoeL3jtb2YeQh04TW19uSO4w88WwKyeOI8qPKU1E7mZvhvOpj95EFwaedtXVR0IAlMCpcepTpp5LZrsE0s0iaUKW7KEtYZVNoeDAb1cKo+WqQ/ESNQi5mKRqwKZzAr8vpbwymD2GHVBO6c5ZqAZvCX3CAZNPdJvhOuWspJ9hVgEmhuYO2w+PH/2EMHibcP2K2QgGDQpmcw1Dh37dRHZ3r1Eh4YHsOUxsOoAtIss4WFC49UPnhOcZaD4tCIwTDUFOaqxd+IpAZHOvxOeOTWBR+A56Uy1RGmkCYUpULl7W8zKIQZmycyF6CKcEWgUBrwLpQwKJwDYYhxzPm1WVkEhrplfVRDAqDPnDj1k9W2yXI5A5GQ/Y5NINCQwEpm79ktV2CTHpQIesEjEmhqQOFOaWRJoARiXqzY4YkrGLwkZnPfiyyYRFYzNTvmiC4AcGCp4bCslfItlumsKPnIY7O9vvIG2xDt42UjQQwqfA24Fdh4ClFiJRPohRyeVCj4DYGCsNW1l+n0JXSMXdQXESVqNSgWjURKLyECsUWgkWiEBYw6IzmpArVmmuDBQphG9LVunYVvsIJvvffUwjKDf8XhUf10roKqV7KODE9pBDW2bx/U+GoFU8TwMmTRyVO7So8SbSQYcRXnk+p8CQRn87afp1SoS3CXtpG1iaQe6ghhMnowLf+AosBBxTmb5ByQdZmjmA8ZKwQHVC4hHOLZCz8VSjIPWcP2KFLFWpWYOSzf4vhgSe2MnsS6Blwkt/vKwQXwzW4coVeFevBDM6AB01IyjCHaZv0QgqXDWDBo1RhxSoG5QRmbQREwYCVqLLv2LxCWGDg9DacqUDgWChL8JtXCIcIx7yGXc5KARVh9bJwZt+8QhMuCmk3dcXkMoE7IfinE47DgIMdaNhKVhPpwKGVrOA1r5CsYKyS2ogXRHDg2pNWuDWucYXZ5ee4leT7nFpJVycFI7H5NpTpNQWv1ubRIisRvRNjlLNbJqVxhUlGQSe+egu5qUy2lBX+IsptxRbGIfmmUzsV3MfSIi3bosqcWsjnrF+5EttQGPSpncGp7SLSTVmZPZEVkElmb6DC523NaUOhPIFL0OlenuKOGk2cghF0ANul985q4Sp6P3Mk/zl3lPzDFvcva0jhdEZvV9KGd3keNTBf+0MpZNoVRejlmRQ/vrc/EuHfOuSgC3KDZhQS0qU3uyQxQ7kD6xskWEx6M91LupraLXpOKVl32knXnF2t99Kd27Y9f5sse44kcfv5XVMKSXbbYGp7thqntudXD+PVteeq/vuiAOv6lEC6ubv0NUtS3QRRVZO5PvVjYwqjOO8YQmpbTGyrquTvmY4Zsx6BbKRqpx1aUEi6OT2oCI91/yUJfnqHH9+SQvJSXaLCvhI+dY6U2KBC8n1U9SDEgaNvByQe11GbVChv6KhYBMe6oSmNd0Ev67dPpJCQ8a7akQvOqzWFnLhHHJspXV07WiH5pvhcwclDQJ3CuCwQc131cF6S9YwbVUiMVVihGWOvjsJ0NvM2q6AxiVVD/s6EY76mwiQrnN8csK35uxXrsac95ttQtbiCU7Icx/uSa20n2S9Ztw1Trtahl3tAN3kf3nP5TRPlRjk9NTJQRjG9gV/TvDgeef3eZJHrzppQmCQ4506sS7ApNcuPRc9ZzqeH769EeljFsC9XfXcXuh+E4XDIX9+fd20j7Zq5f+fgbP90k75jtJ0ey3l7WfO74W/b4XBn/dxcFhyRr0sQmYsk8V4szOhwFKJON9U0LRu/TUet1KZYOP1flUAQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEGQ/wP/AMDWqA+JDgHxAAAAAElFTkSuQmCC" class="card-img-top w-50 m-auto" alt="...">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- galeri sudirman run 2022 --}}
  <div class="card text-center">
    <h5>GALERI SUDIRMAN RUN 2022</h5>
  </div>

  <div id="carouselExampleControlsNoTouching" class="carousel slide w-50 m-auto" data-bs-touch="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="row row-cols-1 row-cols-md-4 g-4 w-50 m-auto mb-5">
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
  
  {{-- artikel terkait --}}
  <div class="card text-center mb-3">
    <h5>ARTIKEL TERKAIT</h5>
  </div>
  <div class="btn-group w-25 " role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Artikel</button>
    <button type="button" class="btn btn-primary">Foto</button>
    <button type="button" class="btn btn-primary">Video</button>
  </div>
  
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BTN Jakarta Run 2023 Dorong dan Geliatkan Sport Tourism Jakarta</h5>
          <p class="card-text">Minggu, 12 Nov 2023 11:55 WIB</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BTN Jakarta Run 2023 Dorong dan Geliatkan Sport Tourism Jakarta</h5>
          <p class="card-text">Minggu, 12 Nov 2023 11:55 WIB</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BTN Jakarta Run 2023 Dorong dan Geliatkan Sport Tourism Jakarta</h5>
          <p class="card-text">Minggu, 12 Nov 2023 11:55 WIB</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BTN Jakarta Run 2023 Dorong dan Geliatkan Sport Tourism Jakarta</h5>
          <p class="card-text">Minggu, 12 Nov 2023 11:55 WIB</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BTN Jakarta Run 2023 Dorong dan Geliatkan Sport Tourism Jakarta</h5>
          <p class="card-text">Minggu, 12 Nov 2023 11:55 WIB</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://i0.wp.com/www.propertynbank.com/wp-content/uploads/2023/11/btn-running-3.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BTN Jakarta Run 2023 Dorong dan Geliatkan Sport Tourism Jakarta</h5>
          <p class="card-text">Minggu, 12 Nov 2023 11:55 WIB</p>
        </div>
      </div>
    </div>
  </div>

  <div class="border text-center mb-5">
    <button type="button" class="btn btn-warning btn-sm text-white">LIHAT LEBIH BANYAK</button>
  </div>


  <div class="card border  mb-5">
    <div class="row g-0">
      <div class="col-md-5 align-self-center">
        <div class="card-body">
          <h1 class="card-title ">SUDIRMAN</h1>
          <h1 class="card-title ">RUN 2023</h1>
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0 ">
              <h6 class="card-title fw-light mt-2">Presented by.</h6>
            </div>
            <div class="flex-grow-1 ms-1">
                <img src="https://akcdn.detik.net.id/community/media/visual/2020/09/17/logo-detikhealth.png?d=1" alt="..."  style="width: 128px">
            </div>
          </div>
          <p>Event Olahraga lari sejauh 10 kilometer yang diselengarakan oleh DetikHealth secara gratis untuk masyarakat indonesia Ajak <br> keluarga dan kerabat anda untuk ikut keseruan Sudirman Run 2023 lalu menangkan hadiah Utama serta doorprize dengan <br> total puluhan juta rupiah</p>
        </div>
      </div>
      <div class="col-md-7">
        <img src="https://img.freepik.com/premium-vector/cityscape-silhouette-blue-high-buildings-urban-background_53562-17581.jpg?w=1380" class="img-fluid rounded-start" alt="..." >
      </div>
    </div>
</div>

<div class="">
  <p>Copyright @ 2023 detikcom. All right reversed</p>
</div>
@endsection