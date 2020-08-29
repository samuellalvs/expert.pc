import React from "react";

import Navbar from "../../global/Navbar";
import Card from "./components/Card";

export default function Home() {
    return (
        <div>
            <Navbar></Navbar>
            <div className="section section-one">
                <div className="container h-100">
                    <div className="d-flex align-items-center h-100 ">
                        <h1 className="text-light">
                            Lorem ipsum dolor, <br />{" "}
                            <b>sit amet consectetur adipiscing elit.</b>
                        </h1>
                        <Card />
                    </div>
                </div>

                <h1></h1>
            </div>
        </div>
    );
}
