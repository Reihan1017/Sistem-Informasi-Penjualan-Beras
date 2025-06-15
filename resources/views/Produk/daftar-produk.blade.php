@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Abah beras</title>
    <style>
        /* Import modern font for good typography */
        @import url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1920&q=80');

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #121212;
            color: white;
        }

        header.bg-dark {
  position: relative;
  padding: 5rem 1rem;
  text-align: center;
  color: white;
  overflow: hidden;
  z-index: 0;
}

/* Add background image and dark overlay */
header.bg-dark::before {
  content: "";
  position: absolute;
  inset: 0;
  background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1920&q=80');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  filter: brightness(0.9);
  z-index: -2;
}

header.bg-dark::after {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.5);
  z-index: -1;
}

.container {
  position: relative; /* ensure stacking above overlay */
  z-index: 1;
}


        h1.display-4 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        p.lead {
            font-size: 1.5rem;
            font-weight: 400;
            color: #d1d5db; /* text-white-50 light gray */
            margin-bottom: 0;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            h1.display-4 {
                font-size: 2.5rem;
            }

            p.lead {
                font-size: 1.125rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header with background image behind text -->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Anda Senang</h1>
                <p class="lead fw-normal text-white-50 mb-0">Anda Senang Kamipun Senang</p>
            </div>
        </div>
    </header>
</body>
</html>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNI0PLzY4zT4XyxwSKpBxpMFHyhwRucg8MAA&s"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Beras Biasa</h5>
                                    <!-- Product price-->
                                    Rp. 13,500/kg
                                </div>
                            </div>

                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Beras Premiun</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rp.16,000</span>
                                    Rp. 14,000/Kg
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Beras Merah</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rp. 15000</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhISExIWFRMVFxYYGBIWFRYWGBcVGRYYFhcVGBgYHigiGhomGxcVITIhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGislICYvLi83LTctLS8tMDMtLzcvLS8wKzEtLy0tLSsrNy8tLS8vLS0uLS0tLS0tLS0tNS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYCAwQHAQj/xABGEAACAQIDBAYIAwYDBgcAAAABAgADEQQSIQUxQVEGEyJhcYEHIzJCkaGxwRTR8DNSYnKC4ZKz8RUkQ1OywhYXRGNzk6P/xAAaAQEAAgMBAAAAAAAAAAAAAAAAAgMBBAUG/8QAMREBAAIBAQUGBAUFAAAAAAAAAAECAxEEEiExsRMyQVFxkWGBofAFIjNS4RQVI0LB/9oADAMBAAIRAxEAPwD3GIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICImDVVBsSAeV4GcTEODxEygIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICcdVAay3AN1P1nZOWt+1p+DfSB9qYJD7o+E4zQyHTd3Ej6SVmurTuIHl3SnpdisPi3p06tqYy9kgNa5YXuRfgOMUOn2KAuSjAc1t9DK16SQwxz2vuH1Mr7Yuy2LanQ9w/OauO87vPz6uTtG0XpmtETwXyt6XKytlGHpvwuGYa8hoZID0kV8mZqKAi3ZDE7+F7TzHBYYaONRe3gTx/XOdGOxItlU+J4eAk+0lV/WZNOa+n0o4i1xh6dv5mP0E6E9IWIYEhEAHz+M8ywdcg5L+18p04rFFVWmNT9z+hG/LFdry+Nl3/80sSXKrSphV3sxY/IW4zmxXpJxZ3dWoPHK32aUtlCixbXjYXHxnM54cI35QtteafF7f6P9pVcXTd6zklSLZWYC2vf3S3dQvf/AIj+c899EVW2Hq/zD6tPQqRJksMzNePnPV3MU646zPlHR96heXzM14FbIPFj5XNvlN5M1YT2E8B9Jam3REQEREBERAREQEREBERAREQE5MSfW0v6/oJ1zkxY7dI97fMQOuJFVn1OszpuRxgeR+kquoxzgpc203fvNKjUxHLTy/O4lu9K6f74pB1NJT556gP2lcXD0hozNfxsb20NiNJqViYj36uHtc65rOeji2vvAF92UctNPGZYaoXLZSzMBchaRawAJ4cLCc1ULfs3AI0vz4idvRbEMMV1AOUYm1J3XR1UjNdGHstpv3d26TjuXtprpGvtz+jGy465cm7ZzVscv/MNxw6u1jxGu6fKGNZizZzcaXtz0v8AC8tO1ug/XYjEdViKSsoQrhwMzZRSVQXs3YzMp4HffjKVs1xYnwmcWbZtowzfDM6xEaxx4b3yX7XsnYV1ddRhfhx90d4/KdNCogGuU9xQX8blZyswI03jXh9pi5Njz+0g58Wl7J6K2V6DlQAARuUDi3ICXwCUD0VdnAqdxLvfydrS2VMSectw9336vR4p1x19I6JDEGyse4/SKAsqjuH0kc1Ymm+vC3xIElRLUyIiAiIgIiICIiAiIgIiICIiAnJj/cP8Q+hnXOPaXsr/ADCBH1muxn0OZpV/WEeP0mBfSB5100xpOMcMBpTuptYggsbX5flKIza8b8z38Zaun1QpjFYa9gGx49ppW8Sihrj2Tqvhy8RumnTl79XE22f81mojRe65mzYOLSljKNWocqI4LGxNhlI3DWazrfWWHA7Rwq0kDIM4ADFsNRqbibkMxuSdN/LzmbZdylq7szvRMcPj8pY2K0VvrMxDt2T0mwqbSxmIaralVVAjZHNyFpg6AXHsneOEo+A0U+Xxly/2vg7aKL6/+iw1vG2bh4yL6Q4yjVydStrXzXp06V7hRup6HUMdf3rSjZ71pM1rS0axWNZnwpGkf6xzbu2Za3x6b0Tx195RquAO8fWfOtNgOOg3cNdJ8ooWIA3kgDz0meIKglVGg0zEm5I0Om4CbLkRHi9X9GOLJw2U8GPzZpb6j6GUT0b6YZTzLfJmluerod3zlmGfy8fOer0WL9OvpHR1UWuLcyv1EnZXcAblf5h9ZYpasIiICIiAiIgIiICIiAiIgIiICcm0j2R/MPoZ1yP209kU/wAQ+hgQ5b1vx18phXcAnu04Dfw/XdMDWvUQjjm+n+s2Ywa939piSHl3pIW2Io99EH/9KkgtmLTYslRrAi6GxPrLrYdnWxF/lLB6Sv2+H/8AgH+bUlTAmtXk4W1zpntKQrUMOAStZibaKUOpsdCbC2th5zc+HwpJtWI0NuwxAIIse++o3aXnZU2RTFFMVWz+tBK0KeUM1iQarO1wiEjTssTytrNWCaj6yp+FXLSXNZ6lR7uTlpobFQQWIJFvZV5JHd48dI93P1OFDD1hZctiVVh2usUXsf4Cx/p8pnWw2FIzCqwA0NkqEFjcgXI00B0427pgKdXF1Xc5V0DPUPZp00ACgsdbCwA4knmTOmpgTXpsaPZw1C4UvcNWq5c7tYA+sKrot7KoUXue1hiI110j+WvZyYYWYubopYmzb9bW0txUeN/EwlU9prG4ubE8RfQzrxC5F6v3jq/dbcvlvM4mEK7W14aPUOgxy4Og3fW/zDLI9QWtxuNNL2v9/vK30Lt+Cww4+ut/9pk+zez4j4SzF3ffq9Bh/Tr6R0SmyPaXxvLJK/sdO2vn9JYJasIiICIiAiIgIiICIiAiIgIiICcO2UvT8xO6c+P9g+X1gVGhpUXxN/gZ1Y024XNt269uH63TXXW1VfHfy0My2jiERAzsqgG2ZyFHPeeMxZmHnfTyg1XFYWmLZ3pog10zNWcDXlqJVa6pmIpksnBiLFv4rcATqBytLP0gxDVMTRrUB1hpZbABj2kcuCF3suo1FxrvkeuyqVQk0sRSpj/lYhjSZP4cxGVwOYNzxAmpWeDh7bSe1tERx1/54NlHbS2ol1YtRprSyDLkqIjMyXYm6EZyDYNccpY8dsih+Gz1WZGNRK1emoVXz1VbqVZm0p2XrDaxsau6R2Bw2Ewlqr1ExdcapRpXNFW4NUqkdoD90D+zZeNztikxLnLix26tr5aqtmp1LD3VOlhuB7pnfiOEsUmYjS+kzP04eLe+AotQFStUFPC5yKdCkcoJX26ruczVXANhoWJNlCi87MetJB+EUClRw1LPia1mLoXKOadO7Waqz9UutwMotuIEXVovTSkrtRtRzmlUSolR7M2YmmqOQe1qGdbAnXhPn46rVFcsKSiq6F+wxBqksyvq9ydGOXVdNE33zF45LYtEeHH79o1+jX/4epM9MsDSpii2IrLnzMlH/ghnYW61zfQCwBGmmsT0g2VTo5FQuXCq1XPYZGqjNTpBRrmFMZjc8Ru3Sb2g2Jqo9Osaahsr1GRWz1DRpqtMOzEgi2oA462lf25jqlaq5qZc2Zr5BZS+gZ9d5OUeQFgN0zMwpyzjivLn9/fzXjoax/B4cAXHrb916rWPfJ+3vcAVHmd3ju36St9CWvhqY5Z/DV23y0VB6vldwBw3KdPmZPD3ffq7WH9OvpHRMbIPrAO4ydle2APWf0H6rLDLpTIiICIiAiIgIiICIiAiIgIiICc+P9g+X1nROfaB9W3l9RArGM/aUz3/AJcJUumrNWqrQLvSUZvWJmJGVFfTLr2mZAbcABxMtmLf1qdx5X4iQfTDZVVlatRdlqqptluSLgA6C5ZTlW436XF/ZMqzWLxNuSNomazEc1IrbAXDq9WlijcBmyMpK1SodsrgmzXsg3H2+4zLF01qZK63AqgHK3tXyU3ueZKulzxbMd1pow7bQqHJUqFKZBzsafu21HrEG8cToNd5splaOHNZqdKirVMiZRYHUAnXnYLlFyBe24XsI/iGXHaI3J1n4OZkxz2e7fnrwa6GAJAIK7t19R3H9cZ1DZp01XXdrNlKm9MlTmQqdVNwQe8TYMWFsDWAtzcC3znDtf4IUxx5NLbOPNfjNT7MPNePH9foTtXFqd1ZT3CoD95jUDH3jr3njMRk05wlOOI8EBjcFl0Nj4feRdenaWupgQQbkk8+A8ZAY6jYkHhNnHfjo1M+LTitnQf9gLcz8M7X3y2YpbU6IvvPje5BvKl0LFqKnx/6jLpihfqBwv8AQCbuz9z5z1d7F+nX0jolNhpZj/L9xJmRexxq3gJKS9MiIgIiICIiAiIgIiICIiAiIgJy7Ta1Jj4fUTqnNtJb03Hd9wYFTxLetU8iLfETtfl3ThrftR3fmJ11Rp+v1aJHnXS51p1FdzYGn8e23x3Sy9E9j1sNXSu7qoysrYcLmazAWDPmAUggEgA7rXkF0ywlOpjMHTqIGBCm9yD+1Y2uDusN09B2diqRJLCzE77XBPlqPDdNXHSvPx1VRjpN5t4vLfSj0Px9fEV8ZQc1aTZT+HUt1iBUVTZNz+zey667pScHsLF5bvhqtNRvqPTZEHmRP1BUorvAObhbT5nSQO3NnVcVT6t0yKzXbcSFWxFtd5tylvaTW9a6c54+jZxUrNvzcni+yejhqali9t6IhNhzZuA8vOWLozVA6ylbKQRZBoQMwUoOVyVBPLMZP47CU8BRNWlmz3tqCDpbeOAuvnOzZW1aOOTrCnr6RF6el9QQbH9xgXU7t57jK9rmcemWONOi7LsO9PaY5nd+LnxeBpJQzUFdqtRjcnMwbMA5a25QVPsi2hEq/wCHVw2bQAsBa2YkEjTuk+3SitXqYrB0aPU4lEcoH0FQA62033e4BNjffrKnhmsovcldLHgRzvuPdK80ReImJczaqxPCVw6N4Y06VMHj1hvu982v8ZaKx1pE8M2nfYSC2MC+Hot3VN385Gkl8QbdSfC/LW0v2fuR9+K+nCkR8I6JzYRuah7l/wC6S8jdjJbOfD7/AJySlyRERAREQEREBERAREQEREBERATTi/YbwM3TVivYbwMCo44etT9cROljpNWNT1i+P5f3m+optp8bfOJFG6a7MevWwwQEVMgysNMrdYxB8Bvl+6P7P6pEzMHqhQHcCyl/eKg7hfv3Sn9I+rXFYV6illprmzZnWzK5dWsntagaW1l0wjXAYm2beltbDh4zUpOkz6oUj81krfv8J8Zba3t4zT1yDQsoNtN26a1qOzCxXJ9++x1i0R4roadrYKhXTq6qBweBFiO9TvU94kPgNnYXBkrRUrn1JJYnTcLtqR3eMmMbiGFtA633gbvjv04yP2niabI9RiLIDZt1ha5vKNp374ZpWV2PJNeEzwR20cAhxGGxCqxZXyMy2PYqA0ze+uUZg2m7KDwkD076LVHJxND2gfXU91//AHl8RYkee8G/RtTpZTw65Symy+yNT8t2ss2O2qlNKWKBvSbJmI1tTqWy1ABvysV8mbiAJX+Gb18U1vGivaaVmVe6L6YLD2OYWqdrmetO75yYxx7C+K/SK+Hpjq0o2FPtNZbFSGOY2twuSdJnjB2D4j9GdLHGkaKtNOCw7KbVh4GSMi9ljtnvX7iSksCIiAiIgIiICIiAiIgIiICIiAmrEjsN4TbNWKNkbwgV/Hr218Znl0mWNF3Xx+0zAgUrpQb1MuhsP1b4zgpbVq01C6nte2D2lU79Pet+t2vd0npOaz2AtpqTYDsjfKxjtkYo+3UYUzwpEpbvupzEeek5U2mLT6z1I2XLbJvVmIh6DUxSlT1jKwNkBLWs+/Job38ORmOH2kmRlSorsps3bvlY9oDTUXG4d88lfovikJOHxVUqdTTZyQeGt7g6aagzmxNDGKAr0VJ/eyqT9FHyl0bluMTC6+LNXhu6vR9sdOsGiAtiBcGxRA7WP7twLX1+vIyqdIOnFOsmWmucEghQwtcE61GW4Hu6C57PnKnV2Dia5BZGa27MVQDyUED4cJMYbowuHUNi6opgi60kGao/hm0Ud5US3THHOVd8d93W/CHV0Rwn4ipUqV7P1aZlpWAp3zBQcnvBb31vqRe40l3qbSWnQZ64zU0sBTAC3cHsotgNPaNjuC7hIPo5QL03fDOlIipRp9Xcs7dbUWkrVahU9m7bgeBFpwbTwWNrCo9UIFoq5ysw0CoKjBEubHKyE3APaW/dOfhHBoZM27MTj49F26HY44ij1jKF1IyLuVczAAeQGsncQOyZWPRop/C34FjbyZpa6g0PgZLD3Pfq262m1YmfKOiawa2Yd6n6rO+cqDWmeYI+V/tOqWpEREBERAREQEREBERAREQEREBNWKF0bwM2zVifYbwMCHxos6jx+kzWaNpt63wtM6dQGZYUHp/tfqcXQpZMwqqAbHUMXyjTjwnCHVWpo1LLntdycuUW3kK4J0ANgugPG00+kdQcal7e7v0Hu7zcWHmPESKxVWrdXZKj2AAZGZrKDu7auOPMzTivj6tLPtMxkms+C1DZxAzozZQbHq2bTXf2xf8A085zY3aK0ms1Ws6m/ZRVd+GubLa+46nnKlWx6FchNQC97FUOvMWK6203a/CG2sQex3Em9RSTvNwKhB+8hOKNddWJ/Ed2ukR9Z/hPY3b+gNFcQWG41FQKORIQa8rfOQlI4hqrVXpPVc5gSyMRy5WFrbu6af8Aaz8NO7NVN9Le85mp9oubmyam+qK1j3Zr2k61iOTSy7TbJ3rT6JOjjcVRL5RTolzSYliu+i4emRmJ1zW0t5TkxHSXElKtJquYVOyz6ksoASw4G6gDNbMRpe2k4KpqVANCQN1lCgXtyAHKcrLaTV78xymXrvo3qg4GmOKl7+dRyJZjxlP9GJ/3Vv5vu0thqSzDP5Pfq7mPuV9I6J+k/ZpHvH/SROyRuGa9GmeTL8msZJSxYREQEREBERAREQEREBERAREQEwqpmBHOZxAj8Rs4sb5gf6bfMH7T4uAA3qfIg/W0kYgeO+kvo5iXrmrSoVHpkAXUZiLAX7I1+UoVahVonVHpnmQyH7T9PzFlB3i/jKoxRHJp5tjjJeb66PzMm06w161j4tm7vevMjtSpuzLpzSmbd18s/R1TZlFt9Kmf6F/KaTsLDH/gU/8ACI7OfNR/QW/e/ODYw3Ps68kT5aaf3nytim3ZrA8BYfSfpJdi4YbqFP8AwCbk2fSG6kg/oX8o7P4n9vt+5+ZaeHqPuVm5WBad+H6OYxx2MNV86bL82An6RWkBuAHkJlaZ7NKPw+PGzz/0f7AxFHDla9NkYm4Xs7rtyPeJbaeze4Dx1+Qt9ZKRJVruxpDoVruxEeTnTDWAGY232sANNeU6IiSZIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIH//2Q==" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">beras ketan putih</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ5wnrGoiNH_Zos2Hvy3D6Qz_ThdhcMMibjg&s" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Ketan Putih Premium</h5>
                                    <!-- Product price-->
                                    17,000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add To Cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>