<template>

    <header>
        <a href="#" class="logo">
            <img id="logo" src="/storage/images/logo/ijunonn.png" width="50" alt="Logo" />

        </a>
        <div class="group">
            <ul class="navigation">
                <li> <a href="#">Inicio</a></li>
                <li> <a href="#">Perfil</a></li>
                <li> <a href="#">Blog</a></li>
                <li> <a href="#">Portifólio</a></li>
                <li> <a href="#">Fala Comigo!</a></li>
            </ul>
            <div class="search">
                <span class="icon">

                    <f-icon icon="search" @click="activeSearch(true)" class="searchBtn"
                        :class="active ? 'active' : ''" />
                    <f-icon icon="close" @click="activeSearch(false)" class="closeBtn"
                        :class="active ? 'active' : ''" />
                </span>
            </div>
        </div>
        <div class="searchBox" :class="active ? 'active' : ''">
            <input type="text" name="search" id="search" placeholder="Pesquisar ...">
        </div>
    </header>

</template>
<script setup>
import { ref } from "vue";


const active = ref(false);

function activeSearch (value) {

    active.value = value;
}

</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: agenda, sans-serif;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 80px;
    background: #222;
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    color: #222;
    text-decoration: none;
    font-size: 1.5em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.group {
    display: flex;
    align-items: center;
}

header ul {
    position: relative;
    display: flex;
    gap: 30px;
}

header ul li {
    list-style: none;
}

header ul li a {
    position: relative;
    text-decoration: none;
    color: #d4d4d4;
    text-transform: uppercase;
    letter-spacing: 0.07em;
    transition: transform 0.5s ease-in-out;
}

header ul li a:hover {
    color: #4afff0 !important;

}

header ul li a::before {
    content: '';
    position: absolute;
    bottom: -2px;
    width: 100%;
    height: 2px;
    background: #4afff0;
    transform: scaleX(0);
    transition: transform 0.5s ease-in-out;
    transform-origin: right;

}

header ul li a:hover::before {
    transform: scaleX(1);
    transform-origin: left;
}

header .search {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.5em;
    z-index: 10 !important;
    cursor: pointer;
    color: #d4d4d4;
}

.searchBox.active {
    right: 0;
}

.searchBox {
    position: absolute;
    right: -100%;
    display: flex;
    width: 100%;
    height: 100%;
    background: #fff;
    align-items: center;
    padding: 0px 30px;
    transition: 0.5s ease-in-out;

}

.searchBox input {
    width: 100%;
    border: none;
    outline: none;
    height: 50px;
    font-size: 1.25em;
    background: #ffffff;
    border-bottom: 1px solid #25252580;
}

.searchBtn {
    position: relative;
    left: 30px;
    top: 2.5px;
    transition: 0.5s ease-in-out;
}

.searchBtn.active {
    left: -10px;
    cursor: default;
}

.closeBtn {
    opacity: 0;
    visibility: hidden;
    transition: 0.5s;
    scale: 0;
}

.closeBtn.active {
    opacity: 1;
    visibility: visible;
    transition: 0.5s;
    scale: 1;
    color: #838282;
}
</style>
