import React from "react";

import logo from "../../../../public/images/logo-nome-expert-pc-white.svg";

export default function Navbar() {
    return (
        <div className="navbar navbar-expand-lg navbar-light">
            <a className="navbar-brand" href="/">
                <img className="nav-logo" src={logo} alt="" />
            </a>
            <button
                className="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span className="navbar-toggler-icon"></span>
            </button>
            <div
                className="collapse navbar-collapse"
                id="navbarSupportedContent"
            >
                <ul className="navbar-nav ml-auto">
                    <li className="nav-item">
                        <a className="nav-link" href="/opniao-do-dono">
                            opniões
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">
                            ajuda
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">
                            tutoriais
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">
                            login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    );
}
