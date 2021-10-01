<script>
import { onDestroy, onMount } from "svelte";
import { t } from "../stores";
import {goto} from '@roxi/routify'

import ClientsCard from "./ClientsCard.svelte";


let clients=[
    {
    brand:'Bologna',
    image: 'bologna.png'
    },
    {
    brand:'Cactus',
    image:'cactus.jpeg',
    },
    {
    brand:'El Puente',
    image:'elpuente.jpg'
    },
    {
    brand:'Jaquets',
    image:'jaquets.jpeg'
    },
    {
    brand:'Mi tienda',
    image:'mitienda.jpg'
    },
    {
    brand:'Sista',
    image:'sista.png'
    },
    {
    brand:'Tu Batalla',
    image:'tb.jpeg'
    },
    {
    brand:'Top Line Solutions',
    image:'tls.svg'
    }
]
let clientsCopy=[...clients];
let item=[];
$: size=0;
let containerSize;
let trans=0;
let cant=clients.length;
let count=0;

const move=()=>{
    setInterval(()=> {
        trans=(size+30)*count;
        count++;
        clientsCopy = [...clientsCopy,clientsCopy[count%cant]];
        if(count==150){ clientsCopy=[...clients];count=0 };
    },3000)};
move();
onMount(async ()=>{
    for(let i=0;i<clients.length;i++){
        clients[i].item=item[i]
    }
    console.log(clients[0].item.w);
    size=clients[0].item.w;
    console.log(containerSize/size);
});
onDestroy(()=>{
    clearInterval(move);
});
</script>

<div class="card">
    <slot></slot>
    <div class="container" bind:clientWidth={containerSize}>
        <div class="carousel" style="transform:translateX(-{trans}px">
            {#each clientsCopy as c,i}
                <ClientsCard id="brand-{i}" img={c.image} brand={c.brand} bind:item={item[i]}></ClientsCard>
            {/each}
        </div>
    </div>
    <div class="p">
        <p>{$t.clients.p}</p>
        <button on:click={$goto($t.links.contact)}>{$t.buttons.pres}</button>
    </div>
</div>

<style>
    *{
        text-align: center;
    }
.carousel{
    transition:all ease 1000ms;
    margin: 3em 0;
    display:flex;
}
.card{
    padding:1em 0;
    max-width: 45em;
    margin:0 auto;
}
.container{
    height: 9em;
    display:flex;
    align-items: center;
    overflow:hidden;
    margin:0 auto;
}
.p{
    padding: 1em;
}
@media (min-width:768px){
    .p{
        width:80%;
        margin: 0 auto;
    }
    .container{
        width:90%;
    }
}
</style>