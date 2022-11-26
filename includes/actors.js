console.log('hi');

const container = document.getElementById('actors');
const span =document.createElement('span');
const hr = document.createElement('hr');

console.log(container)

for(let i = 0; i < actorsJS.length; i++) {
    let actorName = span.innerText = actorsJS[i].nev
    let actorDate = span.innerText = actorsJS[i].valasztas
    let awardName = span.innerText = actorsJS[i].megnevezes

    let p = document.createElement('p');
    p.innerHTML = actorDate + ': ' + actorName + '- ' + awardName;

    console.log(actorDate + ': ' + actorName + '- ' + awardName)

    // container.appendChild(awardName)
    // container.appendChild(actorDate)
    // container.appendChild(actorName)
    // container.appendChild(hr)
    container.appendChild(p);
}