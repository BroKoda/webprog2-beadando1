const container = document.getElementById('actors');

for(let i = 0; i < actorsJS.length; i++) {
    let actorName = actorsJS[i].nev
    let actorDate = actorsJS[i].ev
    let nationalActor = actorsJS[i].valasztas
    let awardName = actorsJS[i].megnevezes

    const dateContainer = document.createElement('div');
    const dateText = document.createElement('p');
    dateText.innerHTML = actorDate;
    dateContainer.classList.add('col-2')
    dateContainer.appendChild(dateText);

    const nameContainer = document.createElement('div')
    const nameText = document.createElement('p');
    nameText.innerHTML = actorName;
    nameContainer.classList.add('col-3')
    nameContainer.appendChild(nameText);

    const nationalActorContainer = document.createElement('div');
    const nationalActorText = document.createElement('p');
    nationalActorText.innerHTML = nationalActor;
    nationalActorContainer.classList.add('col-2')
    nationalActorContainer.appendChild(nationalActorText);

    const awardContainer = document.createElement('div')
    const awardText = document.createElement('p');
    awardText.innerHTML = awardName;
    awardContainer.classList.add('col-5')
    awardContainer.appendChild(awardText);

    container.appendChild(dateContainer);
    container.appendChild(nameContainer);
    container.appendChild(nationalActorContainer);
    container.appendChild(awardContainer);
}