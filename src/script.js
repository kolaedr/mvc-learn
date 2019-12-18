let divsInfo = document.querySelectorAll('.user-info-list div');

document.querySelector('.copywriters').addEventListener('click', (e) => {

    for (const iterator of divsInfo) {
        if (iterator.getAttribute('data-id') == e.target.getAttribute('id')) {
            iterator.classList.remove('hidden');
        } else {
            iterator.classList.add('hidden');
        }
    };

});

document.querySelector('.user-info-list').addEventListener('click', (e) => {
    e.preventDefault();
    if (e.target.classList.contains('show-posts') && !e.target.classList.contains('hide')) {
        console.log(e.target.previousSibling);
        fetch('https://jsonplaceholder.typicode.com/posts?userId=' + e.target.parentNode.getAttribute('data-id'))
            .then(response => response.json())
            .then(json => {
                console.log(json);
                let div = document.createElement('div');
                div.classList.add('post-list');
                json.forEach(element => {
                    let divpost = document.createElement('div');
                    let p = document.createElement('p');
                    let h5 = document.createElement('h5');
                    divpost.classList.add('post-item');
                    h5.textContent = element.title;
                    p.textContent = element.body;
                    divpost.appendChild(h5);
                    divpost.appendChild(p);
                    div.appendChild(divpost);
                });
                e.target.parentNode.appendChild(div);
            });

        e.target.classList.add('hide');
        e.target.innerHTML = 'Hide posts';
    } else if (document.querySelector('.post-list') && e.target.classList.contains('show-posts')) {
        document.querySelector('.post-list').remove();
        e.target.classList.remove('hide');
        e.target.innerHTML = 'Show posts';
    }

});
