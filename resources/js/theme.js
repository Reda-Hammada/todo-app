

// dark theme 
const moon = document.getElementById('moon');

moon.addEventListener('click',() => {

    // header navbar 
    const header = document.getElementById('header');
    header.classList.remove('header_background_light');
    header.classList.add('header_background_dark',);

    // body 
    document.body.classList.add('body')


    // task container 

    const taskContainer = document.getElementById('task_container');
    taskContainer.classList.remove('task_container_light');
    taskContainer.classList.add('task_container_dark');


    

});


// Light Theme 


