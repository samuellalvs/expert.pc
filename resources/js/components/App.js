import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter, Route } from "react-router-dom";
import "../../sass/app.scss";

import Navbar from "./global/Navbar";
import Home from "./pages/home/Home";
import Opniao from "./pages/opniao/Opniao";

function App() {
    return (
        <BrowserRouter>
            <Navbar />
            <Route exact path="/" component={Home} />
            <Route path="/opniao-do-dono" component={Opniao} />
        </BrowserRouter>
    );
}

export default App;

if (document.getElementById("app")) {
    ReactDOM.render(<App />, document.getElementById("app"));
}
