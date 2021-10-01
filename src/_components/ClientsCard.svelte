<script>
export let img,brand,id;
export let item={};
</script>

<div class="card" bind:clientWidth={item.w} bind:clientHeight={item.h} bind:this={item.th} id={id}>
    <img src="/images/brands/{img}" alt="{brand} logo">
</div>

<style>
img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
div{
    min-width: 7em;
    margin:15px;
    height:7em;
    overflow:hidden;
    display:inline;
}
</style>