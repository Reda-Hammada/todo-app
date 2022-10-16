
require('./theme');

// showing and hiding detele cross 
const container = document.getElementsByClassName('task_container_light');
const cross = document.getElementsByClassName('img_cross');

for(let i = 0; i < container.length; i++){

container[i].onmouseover = function show() {

    for(let j =0; j <  cross.length; j++){

    if(container[i].contains(cross[j])){


        cross[j].style.display = 'flex';

            }

        }
    }
}

for(let i = 0; i < container.length; i++){

    container[i].onmouseout = function hide(){

    for(let j = 0; j < cross.length; j++){

        if(container[i].contains(cross[j])){

            cross[j].style.display = 'none';
        }
    }
}
}
