$(document).ready(function () {
    // const apps_fadein = Tweene.line().to($('.apps'), {display: 'block'})
    const app = Tweene.line().to($("main"), {width: '90vw', height: '85vh'}, 1000)
    app.play();
});