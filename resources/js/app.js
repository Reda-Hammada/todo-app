

// toggle delete cross 
const taskContainer = document.getElementById('task_container');
const delete_cross = document.getElementById('delete_cross');

taskContainer.addEventListener('mouseover',  function(){


        delete_cross.style.display='flex';
   


})

taskContainer.addEventListener('mouseout', function(){

    delete_cross.style.display='none';
})


// toggle chekcbox
const checkBox = document.getElementById('check');
const task  = document.getElementById('task');

checkBox.addEventListener('change', function(){

        if(this.checked){

            task.style.textDecoration = 'line-through';

        }else {

            task.style.textDecoration='none';
        }
        
    })





