

// // toggle delete cross 
// const taskContainer = document.getElementById('task_container');
// const delete_cross = document.getElementById('delete_cross');

// taskContainer.addEventListener('mouseover',  function(){


//         delete_cross.style.display='flex';
   


// })

// taskContainer.addEventListener('mouseout', function(){

//     delete_cross.style.display='none';
// })


// // toggle chekcbox
// const checkBox = document.getElementById('check');
// const task  = document.getElementById('task');

// checkBox.addEventListener('change', function(){

//         if(this.checked){

//             task.style.textDecoration = 'line-through';

//         }else {

//             task.style.textDecoration='none';
//         }
        
//     })



    
// const container = document.querySelector('.ultimate_tasks_container');
// container.addEventListener('mouseover', function(e){

//     if(e.target.calssList.contains('task_container')){

//         alert('it works')
//     }
// })



const container = document.querySelector('#task_container');

// function toggleCross(){

//     let cross = document.querySelector('.img_cross');
//     cross.style.display = 'flex';

// }

const elements = document.querySelectorAll(".task_container");
const cross = document.querySelector('.img_cross');


for(let i=0; i < elements.length; i++){

    elements[i].addEventListener('mouseover', function(){

        for(let j=0; i < cross.length; j++){

            if(elements[i].children(cross) == cross[j]){

                cross[j].style.display='flex';
            }
        }
    });

    for(let i=0; i < elements.length; i++){

        elements[i].addEventListener('mouseout', function(){
            const cross = document.querySelector('.img_cross');
    
            for(let j=0; i < cross.length; j++){
    
                if(elements[i].children(cross[j])){
    
                    cross[j].style.display='none';
                }
            }
        });
    }
}