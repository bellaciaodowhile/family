    var modeSwitch = document.querySelector('.mode-switch');

    modeSwitch.addEventListener('click', function () {
        document.documentElement.classList.toggle('dark');
        modeSwitch.classList.toggle('active');
    });

    var listView = document.querySelector('.list-view');
    var gridView = document.querySelector('.grid-view');
    
    listView.addEventListener('click', function () {
        var projectsList = [...document.querySelectorAll('.project-boxes')];
        gridView.classList.remove('active');
        listView.classList.add('active');
        projectsList.map(v => {
            v.classList.remove('jsGridView');
        })
        projectsList.map(v => {
            v.classList.add('jsListView');
        })
    });

    gridView.addEventListener('click', function () {
        var projectsList = [...document.querySelectorAll('.project-boxes')];
        gridView.classList.add('active');
        listView.classList.remove('active');
        projectsList.map(b => {
            b.classList.remove('jsListView');
        })
        projectsList.map(b => {
            b.classList.add('jsGridView');
        })
    });

    document.querySelector('.messages-btn').addEventListener('click', function () {
        document.querySelector('.messages-section').classList.add('show');
    });

    document.querySelector('.messages-close').addEventListener('click', function () {
        document.querySelector('.messages-section').classList.remove('show');
    });
const subtabsGj8 = [...document.querySelectorAll('.main-parent-subtabs-gj8')];
subtabsGj8.map((main, index) => {
    let mainTabsSubtabs = [...main.querySelectorAll('.tab-trigger-subtabs-gj8')];
    let contentTabsSubtabs = [...main.querySelectorAll('.tab-content-subtabs-gj8')];
    mainTabsSubtabs.map((tabTrigger, iTrigger) => {
        tabTrigger.addEventListener('click', (e) => {
            e.preventDefault();
            contentTabsSubtabs.map((content, iContent) => {
                if (iContent == iTrigger) {
                    content.style.display = 'block'
                    mainTabsSubtabs[iContent].classList.add('active')
                } else {
                    content.style.display = 'none'
                    mainTabsSubtabs[iContent].classList.remove('active')
                }
            });
        });
    });
});
const tagFilterTrigger = [...document.querySelectorAll('.tag-filter')]
const tagFilterContent = [...document.querySelectorAll('.tag-filter-content')]
tagFilterTrigger.map((x, index) => {
    x.addEventListener('click', (e) => {
        e.preventDefault();
        tagFilterContent.map((content, iContent) => {
            if (iContent == index) {
                content.style.display = 'block'
                tagFilterTrigger[iContent].classList.add('active')
            } else {
                tagFilterTrigger[iContent].classList.remove('active')
                content.style.display = 'none'
            }
        })
    });
});

async function fetchFilterJSON() {
    const response = await fetch(BASE_URL + 'Assistant/selectAssitants');
    const categories = await response.json();
    return categories;
}

fetchFilterJSON().then(data => {
    data.map((x, index) => {
        x.index = index + 1
    });
    // console.log(data)
    console.log(data)

    const list = document.querySelector('.assistants-list')
    const totalAssistants = document.querySelector('.total-assistants')
    let totalAdventists = document.querySelector('.total.adventists')
    let totalNoAdventists = document.querySelector('.total.no-adventists')
    totalAssistants.textContent = data.length
    totalAdventists.textContent = data.filter(x => x.church != 'visita').length
    totalNoAdventists.textContent = data.filter(x => x.church == 'visita').length

    data.map(x => {
        list.innerHTML += /*html*/ `
        <div class="project-box-wrapper">
            <div class="project-box" style="background-color: ${x.church == 'visita' ? '#c8f7dc': ' #e9e7fd'};">
                <div class="project-box-content-header">
                    <p class="box-content-header">${ x.name }</p>
                    <p class="box-content-subheader">${ x.lastname }</p>
                </div>
                <div class="project-box-footer">
                    <div class="days-left" style="color: #4f3ff0;">
                        ${ x.church }
                    </div>
                </div>
            </div>
        </div>
        `
    })
})
async function fetchFilterJSONMembers() {
    const response = await fetch(BASE_URL + 'Member/selectMembers');
    const categories = await response.json();
    return categories;
}

fetchFilterJSONMembers().then(data => {
    data.map((x, index) => {
        x.index = index + 1
    });
    // console.log(data)
    console.log(data)

    const listMembers = document.querySelector('.members-list')
    const listInstruments = document.querySelector('.members-instruments')
    const listSopranos = document.querySelector('.members-sopranos')
    const listContraltos = document.querySelector('.members-contraltos')
    const listTenores = document.querySelector('.members-tenores')
    const listBaritonos = document.querySelector('.members-baritonos')
    const listBajos = document.querySelector('.members-bajos')
    const allCount = document.querySelector('.all-count')
    const allIntruments = document.querySelector('.all-instruments')
    const allSopranos = document.querySelector('.all-sopranos')
    const allContraltos = document.querySelector('.all-contraltos')
    const allTenores = document.querySelector('.all-tenores')
    const allBaritonos = document.querySelector('.all-baritonos')
    const allBajos = document.querySelector('.all-bajos')
    const totalPartcipants = document.querySelector('.total-participants')
    totalPartcipants.textContent = data.length
    let dataInstruments = data.filter(x => {
        if (x.typeRun != 'soprano' && x.typeRun != 'contralto' && x.typeRun != 'bajo' && x.typeRun != 'tenor' && x.typeRun != 'baritono') {
            return x
        }   
    })
    let dataSopranos = data.filter(x => x.typeRun == 'soprano')
    let dataContraltos = data.filter(x => x.typeRun == 'contralto')
    let dataTenores = data.filter(x => x.typeRun == 'tenor')
    let dataBaritonos= data.filter(x => x.typeRun == 'baritono')
    let dataBajos = data.filter(x => x.typeRun == 'bajo');
    [[data, listMembers, allCount], [dataInstruments, listInstruments, allIntruments], [dataSopranos, listSopranos,allSopranos], [dataContraltos, listContraltos, allContraltos], [dataTenores, listTenores, allTenores], [dataBaritonos, listBaritonos, allBaritonos], [dataBajos, listBajos, allBajos]].map(z => {
        console.log(z[0],z[1])
        z[2].textContent = z[0].length
        if (z[0].length == 0) {
            z[1].innerHTML += /*html*/ `
            <h1 class="project-box-wrapper"> No existe ningún registro en esta área. . .</h1>
            `
        } else {
            z[0].map(x => {
                z[1].innerHTML += /*html*/ `
                <div class="project-box-wrapper">
                    <div class="project-box" style="background-color: ${x.church == 'visita' ? '#c8f7dc': ' #e9e7fd'};">
                        <div class="project-box-content-header">
                            <p class="box-content-header">${ x.name }</p>
                            <p class="box-content-subheader">${ x.lastname }</p>
                        </div>
                        <div class="project-box-footer">
                            <div class="days-left" style="color: #4f3ff0;">
                                ${ x.church }
                            </div>
                            <div class="days-left" style="background: #4f3ff0; color: white; box-shadow: 1px 1px 10px #4f3ff0">
                                ${ x.typeRun }
                            </div>
                        </div>
                    </div>
                </div>
                `
            })
        }
    })
})

