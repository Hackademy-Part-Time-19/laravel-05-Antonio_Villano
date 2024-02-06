<x-layout>
    <ul id="lista">

    </ul>
    <script>
        fetch('/api/articoli')
        .then(response=>response.json())
        .then(data=>{
            let list = document.getElementById('lista');
            for (let item of data) {
                let element= document.createElement('li');
                element.innerText += item.titolo;
                list.appendChild(element);
            }
        })
        .catch(error=>{console.log(error)});
    </script>
</x-layout>