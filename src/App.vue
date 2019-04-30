<template>
  <div id="app">
    <nav id="nav">
      <router-link to="/" class="logoMast"><img class="logoHuesitos" src="./assets/img/huesitos.png" ></router-link>

    </nav>
    <router-view/>
    <footer>
    <p>&copy; 2014 {{ new Date().getFullYear() }} Huesitos DF. Hosted @ Github, the font is just Roboto by
      Google Fonts.</p>
    </footer>
  </div>
</template>

<style lang="scss">
body{
  background: $bg;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color:$negro;
}
nav{
  display:flex;
  background-color:$amarillo;
  align-items: center;
  justify-content: flex-end;
  height: 100px;
  padding:0 3em;
}
.logoMast{
  margin-right:auto;
}
.logoHuesitos{
  width: 80px;
}
footer{
  background-color: $negro;
  color:white;
  padding:5em 3em;
}
</style>
