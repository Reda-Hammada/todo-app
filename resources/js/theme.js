// check selected theme in local storage 
document.body.onload = ()=> {

    if(localStorage.getItem('theme') == 'dark'){

            darkMode();

    }
    else {

        if(localStorage.getItem('theme') == "light"){
              
            lightMode();

        }
    }
}




// dark theme event 
const moon = document.getElementById('moon');
const dark = moon.addEventListener('click',() => {
        
        localStorage.setItem('theme','dark');
        darkMode();

        
});


// light theme event
const sun = document.getElementById('sun');
sun.addEventListener('click', ()=>{

        localStorage.setItem('theme','light');
        lightMode();           


});




        
       
 // dark mode 
const darkMode= () => {
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
            
            // // delete cross

            // task container 

            const taskContainer = document.getElementsByClassName('task_container_light');

            for(let i = 0; i<taskContainer.length; i++){

                taskContainer[i].classList.add('task_container_dark');

            }
            

            // count items container
            const countItemsContainer = document.getElementById('count_items_container');
            countItemsContainer.classList.remove('count_items_container_light');
            countItemsContainer.classList.add('count_items_container_dark');

        
        
    }
 
  


// Light Theme 
const lightMode  = () => {

          moon.style.display ='flex';
          sun.style.display ='none';

         // header navbar 

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

          const taskContainer = document.getElementsByClassName('task_container_light');

          for(let i = 0; i<taskContainer.length; i++){

              taskContainer[i].classList.remove('task_container_dark');


          }
          
       

          

          // count items container
          const countItemsContainer = document.getElementById('count_items_container');
          countItemsContainer.classList.remove('count_items_container_dark');
          countItemsContainer.classList.add('count_items_container_light')



    }


