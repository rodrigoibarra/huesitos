<template>
  <div class="home gridContainer">
    <div class="hero">
      <div class="tagHero">
      <h1>Bienvenido a Huesitos DF</h1>
      <p>Vendemos alimento y accesorios para mascotas, servicio a domicilio en TODO el DF</p>
      </div>
      <img src="../assets/img/perritu.png" alt="Huesitos DF">
    </div>
    <div class="onBoarding flexContainer">
      <div class="itemOnBoard">
      <svg id="icon-maximize" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M20.71 19.29l-3.4-3.39A7.92 7.92 0 0 0 19 11a8 8 0 1 0-8 8 7.92 7.92 0 0 0 4.9-1.69l3.39 3.4a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 11a6 6 0 1 1 6 6 6 6 0 0 1-6-6z" />
    </svg>
         <p>busca lo que necesitas</p>

      </div>
      <div class="itemOnBoard">
      <svg version="1.1" id="icon-phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
      y="0px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
      <path d="M91.8,198.9c35.7,71.4,96.9,130.05,168.3,168.3L316.2,311.1c7.649-7.649,17.85-10.199,25.5-5.1
                  c28.05,10.2,58.649,15.3,91.8,15.3c15.3,0,25.5,10.2,25.5,25.5v86.7c0,15.3-10.2,25.5-25.5,25.5C193.8,459,0,265.2,0,25.5
                  C0,10.2,10.2,0,25.5,0h89.25c15.3,0,25.5,10.2,25.5,25.5c0,30.6,5.1,61.2,15.3,91.8c2.55,7.65,0,17.85-5.1,25.5L91.8,198.9z" />
      </svg>
           <p>Llamanos!</p>
      </div>
      <div class="itemOnBoard">
      <svg id="icon-cycling" version="1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="#00D67C" d="M331 123c23 0 42-20 42-43s-19-43-42-43-43 20-43 43 19 43 43 43zM107 261a107 107 0 1 0 107 107c-1-59-49-107-107-107zm0 182c-42 0-75-33-75-75s33-75 75-75c41 0 74 33 74 75s-33 75-74 75z" />
            <path fill="#2a2a31" d="M404 239v-43c-32 0-58-11-78-31l-41-40c-7-8-17-13-29-13s-22 4-30 13l-59 58c-7 8-12 19-12 30s5 23 12 31l68 60v107h42V277l-47-47 51-51 16 16c26 28 64 44 107 44z" />
            <path fill="#00D67C" d="M405 261a107 107 0 1 0 107 107c0-59-48-107-107-107zm0 182c-41 0-74-33-74-75s33-75 74-75c42 0 75 33 75 75s-33 75-75 75z" />
          </svg>
       <p>Te lo llevamos a tu casa</p>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.hero{
    grid-column: 1 / 9;
    padding:2em 3em;
    background-color: $rojo;
    display:flex;
    align-items: center;
    justify-content: space-around;

}
.onBoarding{
  grid-column: 1 / 9;
  justify-content: space-between;
  margin:5em 0;
  padding: 2em 3em;
}

.itemOnBoard{
  width: 100%;
  text-align: center;
  font-size:1.8em;

}

.tagHero{
  font-size:1.8em;
  width: 40%;
}
.tagHero p{
  color:white;
  font-size:1.4rem;
}
 svg {
      text-align: center;
      margin: auto;
      width: 3em;
      height: 100px;
    }


</style>
