

// dark theme 
const moon = document.getElementById('moon');

const dark = moon.addEventListener('click',() => {

    // header navbar 
    const header = document.getElementById('header');
    header.classList.remove('header_background_light');
    header.classList.add('header_background_dark',);

    // body 
    document.body.classList.add('body')

    // add form 

    const addForm = document.getElementById('add_form');
    addForm.classList.remove('add_todo_form_light');
    addForm.classList.add('add_todo_form_dark');


    // task container 

    const taskContainer = document.getElementById('task_container');
    taskContainer.classList.remove('task_container_light');
    taskContainer.classList.add('task_container_dark');


    // count items container
    const countItemsContainer = document.getElementById('count_items_container');
    countItemsContainer.classList.remove('count_items_container_light');
    countItemsContainer.classList.add('count_items_container_dark');


});


// Light Theme 


