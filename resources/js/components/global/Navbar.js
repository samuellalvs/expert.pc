import React from "react";

import logo from "../../../../public/images/expert-pc.png";

export default function Navbar() {
    return (
        <div className="navbar navbar-expand-lg navbar-light bg-light">
            <a className="navbar-brand" href="#">
                expert.pc
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
                        <a className="nav-link" href="#">
                            LOGIN
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">
                            Link
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    );
}
