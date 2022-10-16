// check selected theme in local storage 
document.body.onload = ()=>{

    if(localStorage.getItem('theme') == 'dark'){

        moon.style.display = "none";
            sun.style.display='flex';
                
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

            const taskContainer = document.querySelectorAll('.task_container_light');

            for(let i = 0; i<taskContainer.length; i++){

                taskContainer[i].classList.add('task_container_dark');

            }
            

            // count items container
            const countItemsContainer = document.getElementById('count_items_container');
            countItemsContainer.classList.remove('count_items_container_light');
            countItemsContainer.classList.add('count_items_container_dark');

        
        


    }
    else {

        if(localStorage.getItem('theme') == "light"){
                // header navbar 
            moon.style.display ='flex';
            sun.style.display ='none';
            const header = document.getElementById('header');
            header.classList.remove('header_background_dark');
            header.classList.add('header_background_light',);

            // body 
            document.body.classList.remove('body')

            // add form 

            const addForm = document.getElementById('add_form');
            addForm.classList.remove('add_todo_form_dark');
            addForm.classList.add('add_todo_form_light');


            // task container 

            const taskContainer = document.querySelectorAll('.task_container_dark');


                taskContainer.classList.remove('task_container_dark');
                taskContainer.classList.add('task_container_light')

            
            

            // count items container
            const countItemsContainer = document.getElementById('count_items_container');
            countItemsContainer.classList.remove('count_items_container_dark');
            countItemsContainer.classList.add('count_items_container_light');



        }
    }
}




// dark theme 
const moon = document.getElementById('moon');


const dark = moon.addEventListener('click',() => {
        
        localStorage.setItem('theme','dark');


            moon.style.display = "none";
            sun.style.display='flex';
                
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

            const taskContainer = document.querySelectorAll('.task_container_light');

            for(let i = 0; i<taskContainer.length; i++){

                taskContainer[i].classList.add('task_container_dark');

            }
            

            // count items container
            const countItemsContainer = document.getElementById('count_items_container');
            countItemsContainer.classList.remove('count_items_container_light');
            countItemsContainer.classList.add('count_items_container_dark');

        
        


        
        
});



// light theme 
const sun = document.getElementById('sun');
sun.addEventListener('click', ()=>{

        localStorage.setItem('theme','light');
            // header navbar 
            moon.style.display ='flex';
            sun.style.display ='none';
            const header = document.getElementById('header');
            header.classList.remove('header_background_dark');
            header.classList.add('header_background_light',);

            // body 
            document.body.classList.remove('body')

            // add form 

            const addForm = document.getElementById('add_form');
            addForm.classList.remove('add_todo_form_dark');
            addForm.classList.add('add_todo_form_light');


            // task container 

            const taskContainer = document.querySelectorAll('.task_container_dark');


                taskContainer.classList.remove('task_container_dark');
                taskContainer.classList.add('task_container_light')

            
            

            // count items container
            const countItemsContainer = document.getElementById('count_items_container');
            countItemsContainer.classList.remove('count_items_container_dark');
            countItemsContainer.classList.add('count_items_container_light');




});




        
       

    
    
 
  


// Light Theme 


