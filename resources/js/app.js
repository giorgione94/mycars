/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');

window.insertColumns = function insertColumns(tr, value) {
    for(let i=0; i<value.length; i++) {
        let td = document.createElement('td');
        td.innerText = value[i];
        tr.appendChild(td);
    }
}


