<template>

    <header :class="open ? 'open' : ''">
        <a href="#" class="logo">
            <img id="logo" src="/storage/images/logo/ijunonn.png" width="50" alt="Logo" />

        </a>
        <div class="group">
            <ul class="navigation">
                <li> <a href="#"> <span class="binary">0001</span> <span> Inicio</span></a></li>
                <li> <a href="#"> <span class="binary">0010</span> Perfil</a></li>
                <li> <a href="#"><span class="binary">0011</span>Blog</a></li>
                <li> <a href="#"><span class="binary">0100</span>Portifólio</a></li>
                <li> <a href="#"><span class="binary">0101</span>Fala Comigo!</a></li>
            </ul>
            <div class="search">
                <span class="icon">

                    <f-icon icon="search" @click="activeSearch(true)" class="searchBtn"
                        :class="active ? 'active' : ''" />
                    <f-icon icon="close" @click="activeSearch(false)" class="closeBtn"
                        :class="active ? 'active' : ''" />
                </span>
            </div>
            <f-icon :class="active ? 'hide' : ''" class="menuToggle" @click="openMenuResponsive(true)" icon="bars" />
        </div>
        <div class="searchBox" :class="active ? 'active' : ''">
            <input type="text" name="search" id="search" placeholder="Pesquisar ...">
        </div>
    </header>

</template>
<script setup>
import { ref } from "vue";


const active = ref(false);
const open = ref(false)

function activeSearch (value) {

    active.value = value;
    if (open.value) {
        open.value = false;
    }
}

function openMenuResponsive (value) {
    open.value = value;
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
    display: flex;
    flex-direction: column;
    text-align: center;
    scale: 1;
    transition: 0.3s ease-in-out;
}

header ul li a .binary {
    font-size: 0.9em;
    color: #d4d4d47a;
}

header ul li a:hover {
    color: #4afff0 !important;
    scale: 1.2;
}

header ul li a:hover .binary {
    font-size: 0.9em;
    color: #4afff098;
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
    background: transparent;
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
    background: #222;
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
    background: #ffffff00;
    color: #d4d4d4;
    border-bottom: 1px solid #e4e4e493;
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
    color: #d4d4d473;
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

.menuToggle {
    position: relative;
    color: #d4d4d4;
    font-size: 1.25em;
    display: none;
}

/*  Responsible */

@media (max-width: 800px) {

    .searchBtn {
        left: 0;
    }

    .menuToggle {
        position: absolute;
        display: block;
        font-size: 1.7em;
        cursor: pointer;
        transform: translateX(30px);
        z-index: 10;
    }

    header .navigation {
        position: absolute;
        opacity: 0;
        visibility: hidden;
        left: 100%;
    }

    header.open .navigation {
        top: 80px;
        opacity: 1;
        visibility: visible;
        left: 0;
        display: flex;
        flex-direction: column;
        background: #222;
        width: 100%;
        height: calc(100vh -80px);
        padding: 40px;
        border-top: 1px solid #ffffff31;
    }

    header.open .navigation li a {
        font-size: 1.25em;
    }

    header ul li a {

        display: flex;
        flex-direction: column;
        text-align: left;
    }

    .hide {
        display: none;
    }
}
</style>
