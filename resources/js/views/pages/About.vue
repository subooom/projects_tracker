<template>
    <div class="about-section">
        <div class="about-title">
            <h3>
                ParadiseInSelf<br />
                Season — 2020
            </h3>
        </div>
        <div class="about-content">
            <div>
                <h5>UPU</h5>
                <p class="detail" style="min-height: 26px">WE ARE OCEANIA</p>
                <p class="date">
                    5.mar— <br />
                    15.mar.20
                </p>
            </div>

            <div>
                <h5>The Writer</h5>
                <p class="detail" style="min-height: 26px">
                    A Ferocious call to arms
                </p>
                <p class="date">
                    11.jun— <br />
                    4.jul.20
                </p>
            </div>

            <div>
                <h5>
                    Every Brilliant <br />
                    Thing
                </h5>
                <p class="detail" style="min-height: 26px">
                    What would you put on <br />
                    your list?
                </p>
                <p class="date">
                    25.aug— <br />
                    19.sep.20
                </p>
            </div>

            <div>
                <h5>BREAK BREAD</h5>
                <p class="detail" style="min-height: 26px;">
                    Tell us who you are. Tell<br />
                    us where you come from.
                </p>
                <p class="date">
                    5.nov— <br />
                    28.nov.19
                </p>
            </div>
        </div>
      </div>
        <div class="about">
            <div class="page-title">
                <h1>about</h1>
            </div>
            <hr />
            <div class="horizontal-flex">
                <div class="left-panel">
                    <h4>
                        Established in 2020, ParadiseInSelf is a tracking app
                        that meets the needs of different types of projects as
                        well as individual users.
                    </h4>
                    <p>
                        This is a open-sourced projects tracker, manager
                        application, which helps you add projects and then
                        define tasks, time frames, ERD, wire frames, get
                        notified for each task, and if it's completed or not,
                        the user will then modify the task completion details,
                        or add extension period for the specific task.
                    </p>

                    <p>
                        We aim to invigorate, agitate and illuminate.As
                        effective time tracking helps also the resources, in
                        order to keep track of their normal work time as well as
                        the overtime they have put in.
                    </p>
                </div>

                <div class="right-panel">
                    <div class="heading">
                        <h2>season archive</h2>
                        <br />
                        <p class="solo">SILO THEATRE IS ANTI–STATIC.</p>
                    </div>
                    <div class="creater">
                        <div class="creater1">
                            <img
                                src="/img/sus.png"
                                alt="sushma"
                                class=" image"
                            />
                            <p class="name">
                                Sushma Chaudhary
                            </p>
                            <p class="job">
                                Founder
                            </p>
                        </div>
                        <div class="creater2">
                            <img
                                src="/img/hehe.jpg"
                                alt="Subham"
                                class=" image"
                            />
                            <p class="name">
                                Subham Kharel
                            </p>
                            <p class="job">
                                Founder
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import LocalStorage from './../../models/storage';

    export default {
        name: "About",
        beforeMount(){
          LocalStorage.set('app_mode', 'paradiseinself')
        }
    };
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");
.about-section {
    display: flex;
    flex-direction: column;
    position: relative;
    width: 100vw;
    background-color: white;
    background-size: cover;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}
.about-title {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-top: 50px;
}

.about-title h3 {
    color: #111;
    font-weight: bolder;
    font-family: "Roboto", sans-serif;
    letter-spacing: 1px;
    font-size: 35px;
}
.about-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: nowrap;
    margin-top: 50px;
}
.about-content div {
    padding: 0 0 5px 11px;
    margin: 0 0 10px;
    width: 200px;
    text-align: left;
}
.about-content h5 {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 2px;
    padding: 5px 0;
    text-transform: uppercase;
    border-bottom: 2px solid #111;
    letter-spacing: 3px;
}
.horizontal-flex {
    display: flex;
    margin-left: 102px;
}
.left-panel h4 {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-size: 22px;
    font-weight: 600;
    letter-spacing: 1px;
}

.left-panel p {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-size: 35px;
    font-weight: 700;
}
.detail {
    font-size: 13px;
    color: #111;
    font-family: "Roboto", sans-serif;
    font-weight: 400;
    letter-spacing: 0.4px;
}

.date {
    line-height: 1;
    font-size: 11px;
    color: #111;
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: .4px;
}

.about h1 {
    margin: 25px 72px 50px;
    font-size: 150px;
    font-family: "Roboto", sans-serif;
    margin-left: 144px;
}
h1 {
    margin-left: 158px;
    color: #111;
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    letter-spacing: 3px;
    line-height: 1em;
    font-weight: bolder;
}

.about hr {
    width: 110px;
    margin: 0 0 10px;
    border-top: 2px solid #111;
    margin-left: 253px;
}
hr {
    border-color: #ccc;
    border-style: solid;
    border-width: 1px 0;
    height: 0;
}
.left-panel {
    margin-left: 149px;
    width: 242px;
}

.left-panel p {
    color: #111;
    font-family: "Roboto", sans-serif;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 1px;
    margin-top: 25px;
}

.right-panel {
    margin-left: 95px;
    max-width: 500px;
}
.heading h2 {
    font-family: "Roboto", sans-serif;
    color: #111;
    text-transform: uppercase;
    font-size: 20px;
    padding: 0 10px 0 0;
    border-bottom: 2px solid #111;
    line-height: 26px;
    font-size: 16px;
    font-weight: 400;
    margin-top: 20px;
    letter-spacing: 1px;
    width: 156px;
}
.solo {
    margin-bottom: 20px;
    font-family: "Roboto", sans-serif;
    font-size: 38px;
    font-weight: 400;
    line-height: 1;
    color: #111;
}
.creater {
    display: flex;
    margin-top: 45px;
}

.creater2 {
    margin-left: 83px;
}
.name {
    margin: auto;
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    color: #111;
    margin-top: 8px;
}

.job {
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    color: #111;
    margin-top: 8px;
}

.image {
    width: 110px;
    height: 160px;
    object-fit: cover;
}

@media screen and (max-width: 320px) {
    .about h1 {
        font-size: 55px;
        text-align: center;
        margin-left: 70px;
    }

    .about-content {
        display: flex;
        flex-direction: column;
    }

    .about hr {
        width: 110px;
        margin: 0 0 10px;
        border-top: 2px solid #111;
        margin-left: 94px;
    }
    .horizontal-flex {
        display: flex;
        flex-direction: column;
        margin-left: 17px;
    }

    .left-panel {
        margin-left: 20px;
    }

    .right-panel {
        text-align: center;
    }
    .solo {
        font-size: 15px;
        width: 200px;
    }

    .heading h2 {
        font-size: 10px;
    }
    .creater {
        display: flex;
        flex-direction: column;
    }
    .creater2 {
        margin-left: 5px;
    }
}

@media screen and (max-width: 360px) {
    .about h1 {
        font-size: 55px;
        align-items: center;
        margin-left: 70px;
    }
    .about-content {
        display: flex;
        flex-direction: column;
    }
    .creater {
        display: flex;
        flex-direction: column;
    }
    .about h1 {
        font-size: 50px;
        text-align: center;
        margin-left: 84px;
    }

    .about-content {
        display: flex;
        flex-direction: column;
    }

    .about hr {
        width: 110px;
        margin: 0 0 10px;
        border-top: 2px solid #111;
        margin-left: 66px;
    }
    .horizontal-flex {
        display: flex;
        flex-direction: column;
        margin-left: 35px;
    }

    .left-panel {
        margin-left: 30px;
    }

    .right-panel {
    }

    .solo {
        font-size: 15px;
    }
    .creater1 {
        margin-top: 5px;
        margin-right: 48px;
    }
    .creater2 {
        margin-left: 5px;
    }
}

@media screen and (max-width: 506px) {
    .about h1 {
        font-size: 86px;
        text-align: center;
        align-items: center;
        margin-left: 84px;
    }
    .about-content {
        display: flex;
        flex-direction: column;
    }
    .creater {
        display: flex;
    }
    .about h1 {
        font-size: 78px;
        align-items: center;
        margin-left: 84px;
    }

    .about-content {
        display: flex;
        flex-direction: column;
    }

    .about hr {
        width: 110px;
        margin: 0 0 10px;
        border-top: 2px solid #111;
        margin-left: 165px;
    }
    .horizontal-flex {
        display: flex;
        flex-direction: column;
        margin-left: 35px;
        justify-content: center;
        align-items: center;
    }

    .left-panel {
        margin-left: 30px;
    }

    .right-panel {
        text-align: center;
        margin-left: 22px;
    }
    .heading h2 {
        margin-left: 142px;
    }
    .solo {
        font-size: 15px;
    }
    .creater1 {
        margin-left: 50px;
    }
}
</style>
