
// const btn1 = document.getElementById('filter-txt');
// const txt1 = document.getElementById('filter-txt');
// btn1.addEventListener('click', function(e) {
//     txt1.classList.toggle('active');
// });

// const btn1 = document.querySelectorAll('.filter__btn');
// const txt1 = document.querySelector('#filter #filter__btn');
// console.log(btn1);
// btn1.addEventListener('click', function(e) {
//     txt1.classList.toggle('active');
// }); 

const filters = document.querySelectorAll('.filter__btn')
console.log(test);
filters.forEach(function(e) {console.log(e);
     e.addEventListener('click', function()
     {this.classList.add("active") , console.log(test);
    })
 });

const filterForum = document.getElementById(filterForum)
const filterName = document.getElementById(filterName)
const filterAge = document.getElementById(filterAge)
const filterGender = document.getElementById(filterGender)
const filterCreateOrder = document.getElementById(filterCreateOrder)
const filterStatus = document.getElementById(filterStatus)

filterForum.addEventListener('click', function(){
   
})
//  mettre un if pour annuler au click sur un autre des boutons
