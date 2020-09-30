import React from "react";

import Topicos from "../opniao/components/Topicos";

export default function Opniao() {
    return (
        <div>
            <div className="container">
                <div className="section">
                    <div className="d-flex h-100 justify-content-center align-items center">
                        <div className="card border-0 shadow card-opniao">
                            <div className="card-body">
                                <div className="d-flex flex-column">
                                    <div className="d-flex flex-column flex-md-row">
                                        <div className="col-12 col-md-8">
                                            <p className="m-0">
                                                placa de video
                                            </p>
                                            <h2 className="font-weight-bold">
                                                RTX 2080 Super
                                            </h2>
                                            <div className="line-purple mb-5"></div>
                                        </div>
                                        <div className="col-12 col-md-4">
                                            <img
                                                className="img-fluid mt-md-4"
                                                src="/storage/brands/gigabyte.png"
                                                alt="Gigabyte"
                                            />
                                        </div>
                                    </div>
                                    <Topicos name="desempenho" rating="5.0" />
                                    <Topicos name="consumo" rating="4.3" />
                                    <Topicos name="aquecimento" rating="3.8" />
                                    <Topicos
                                        name="custo beneficio"
                                        rating="2.6"
                                    />
                                    <Topicos name="preço" rating="5.0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className="section bg-light">
                <div className="container">
                    <div className="d-flex flex-column pt-5">
                        <h2 className="font-weight-bold">Avaliações</h2>
                        <div className="line-green mb-5"></div>
                    </div>
                    <div className="d-flex flex-column">
                        <div className="card shadow-sm border-0">
                            <div className="card-body">
                                <div className="d-flex">
                                    <div className="col-md-8">
                                        <div className="d-flex flex-column">
                                            <h3 className="rating-user-title mb-0">
                                                Lorem ipsum dolor sit amet
                                            </h3>
                                            <p className="rating-user-name">
                                                example
                                            </p>

                                            <p className="font-weight-bold mb-0">
                                                Prós
                                            </p>
                                            <p className="text-justify">
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                                Duis dui tortor, feugiat sed
                                                elit ut, vestibulum ultricies
                                                ante. Aliquam at sollicitudin
                                                sem. Maecenas at sapien mollis,
                                                consequat eros finibus,
                                                tincidunt ipsum. Quisque porta
                                                augue nunc, vel imperdiet quam
                                                tristique ac. In in vulputate
                                                nisi, in dapibus nisi. Fusce
                                                ullamcorper sem vitae ante
                                                mollis, ut semper elit mattis.
                                                Curabitur tempus ligula vitae
                                                tempus convallis. Proin faucibus
                                                pharetra nunc et pretium. Class
                                                aptent taciti sociosqu ad litora
                                                torquent per conubia nostra, per
                                                inceptos himenaeos.
                                            </p>
                                        </div>
                                    </div>
                                    <div className="col-md-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
