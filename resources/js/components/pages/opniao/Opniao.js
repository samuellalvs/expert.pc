import React from "react";

import Navbar from "../../global/Navbar";

export default function Opniao() {
    return (
        <div>
            <Navbar></Navbar>
            <div className="container">
                <div className="section">
                    <div className="d-flex h-100 justify-content-center align-items center">
                        <div class="card border-0 shadow mt-10">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
