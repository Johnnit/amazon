document.querySelector('th #selectAll').addEventListener('change',()=>{
    if( document.querySelector('th #selectAll').checked){
    
        document.querySelectorAll("td #select").forEach(e=>{
                e.checked = true;
            
            })
    }
    else{
        document.querySelectorAll("td #select").forEach(e=>{
                e.checked = false;
            })
    }
});