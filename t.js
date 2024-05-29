var c = [...c].map(e=>{
    return {
        image: e.querySelector('img').src,
        title: e.querySelector('h6').innerText,
    }
});
