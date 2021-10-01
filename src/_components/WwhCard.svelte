<script>
import {
    slide, fade
} from 'svelte/transition'
export let text, p, img, imgOpen, alt;
let card,isOpen;
let imgH,pH,hH;
$: tamOpen=imgH+hH+120+pH;
$: tamClose=imgH+hH+120;



</script>


<div class="card"
bind:this={card}
on:mouseenter={()=> isOpen=true}
on:mouseleave={()=> isOpen=false}
style="height:{isOpen? tamOpen : tamClose}px">
    <div class="image" bind:clientHeight={imgH}>
        <img class="gray" src={img} alt={alt}>
        {#if isOpen}
            <img transition:fade class="gradient" src={imgOpen} alt={alt}>
        {/if}
    </div>
    <h3 bind:clientHeight={hH}>{text}</h3>
    {#if isOpen}
        <p transition:slide bind:offsetHeight={pH}>{p}</p>
    {/if}
</div>

<style>
*{
    transition: all linear 100ms;
    text-align: center;
}
.card {
    width:80%;
    max-width: 25em;
    padding: .3em 1.4em;
    display: flex;
    justify-content: center;
    flex-flow: column;
}

p {
    text-align: left;
    color: var(--text2);
    font-size: .9rem;
    margin-top: 1em;
}

h3 {
    font-size: 1.4em;
    margin-bottom: 0;
    margin-top: 0;
}

.image {
    width: 5em;
    height: 5em;
    display: block;
    overflow: hidden;
    object-fit: contain;
    margin:0 auto;
    position:relative;
}
img{
    width:100%;
    position:absolute;
    top:0;
    left:0;
}

@media (min-width:768px){
    .image{
        width:7em;
        height:7em;
    }
    h3{
        font-size: 1.8em;
    }
}

</style>
