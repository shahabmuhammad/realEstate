<style>
    /*************************************** Projects section ************************************/
.__container__ {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  padding: 80px 20px;
  max-width: 1400px;
  margin: auto;
}

.__item__ {
  position: relative;
  overflow: hidden;
  height:100%;
  border: 1px solid #0000001a;
}

.__item__ img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.__item__:hover img {
  transform: scale(1.1);
}

.__item__ .__overlay__ {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4);
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.__item__:hover .__overlay__ {
  opacity: 1;
}

.__item__ .__overlay__ h3 {
  color: #fff;
  font-size: 1.5rem;
  text-transform: uppercase;
}
.__item__ h3 {
  position: absolute;
  z-index: 2;
  top: 44%;
  left: 50%;
  color: #fff;
  font-size: 1.5rem;
  text-transform: uppercase;
  transform: translate(-50%, -50%);
}

.__item__:before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 112vh;
  background-color: transparent;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 67.6%, #000000);
  opacity: 0.6;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
  z-index: 1;
}
.__item__:hover::before {
  /* z-index: 1; */
}

.__item__:after {
  content: "";
  width: 0;
  padding-top: 121.5%;
}

@media (max-width: 1024px) {
  .__container__ {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .__container__ {
    grid-template-columns: 1fr;
  }

  .__item__ .__overlay__ h3 {
    font-size: 1.2rem;
  }
}

</style>


    <!---------------------------------- Explore our projects ---------------------------------->
    <div class="__container__">
    <a href="#">
    <div class="__item__">
        <img
          src="https://res.cloudinary.com/luxuryp/images/w_1920,c_limit,f_auto,q_auto/y1iqxwt0r5py0q0xg70k/krisztina-papp-sgxr_tzqgpi-unsplash"
          alt="New York City"
        />
        <div class="__overlay__"></div>
        <h3>Property 1</h3>
      </div>
</a>

      <a href="#"> 
      <div class="__item__">
        <img
          src="https://res.cloudinary.com/luxuryp/images/f_auto,q_auto/mgxtmrbvq4f5jvjaq7ym/shutterstock_1804409353-1"
          alt="The Hamptons"
        />
        <div class="__overlay__"></div>
        <h3>Property 2</h3>
      </div>
</a>

      <a href="#"> 
      <div class="__item__">
        <img
          src="https://res.cloudinary.com/luxuryp/images/f_auto,q_auto/aqilhnbu0vrdahbl9rz1/-1853738951"
          alt="Miami"
        />
        <div class="__overlay__"></div>
        <h3>Property 3</h3>
      </div>
</a>

      <a href="#"> 
      <div class="__item__">
        <img
          src="https://res.cloudinary.com/luxuryp/images/f_auto,q_auto/mgxtmrbvq4f5jvjaq7ym/shutterstock_1804409353-1"
          alt="Los Angeles"
        />
        <div class="__overlay__"></div>
        <h3>Property 4</h3>
      </div>
</a>

      <a href="#"> 
      <div class="__item__">
        <img
          src="https://res.cloudinary.com/luxuryp/images/f_auto,q_auto/aqilhnbu0vrdahbl9rz1/-1853738951"
          alt="San Francisco"
        />
        <div class="__overlay__"></div>
        <h3>Property 5</h3>
      </div>
</a>

      <a href="#"> 
      <div class="__item__">
        <img
          src="https://res.cloudinary.com/luxuryp/images/w_1920,c_limit,f_auto,q_auto/y1iqxwt0r5py0q0xg70k/krisztina-papp-sgxr_tzqgpi-unsplash"
          alt="Chicago"
        />
        <div class="__overlay__"></div>
        <h3>Property 6</h3>
      </div>
</a>
    </div>
    <!---------------------------------- Explore our projects ends ---------------------------------->