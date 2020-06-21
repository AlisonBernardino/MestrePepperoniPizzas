// clientInfo
// vipBonusInfo

type clientInfo = {
    id: number;
    name: string;
    email: string;
}

const client: clientInfo = {
    id: 100,
    name: "Client01",
    email: "client01@email.com"
}

type vipBonusInfo = {
    discountPercentual: number;
    freePizzaFlavor: string;
}

const specialAward: vipBonusInfo = {
    discountPercentual: 10,
    freePizzaFlavor: "Ham and cheese"
}

type awardedClientInfo = clientInfo & vipBonusInfo

const awardedClient: awardedClientInfo = {
    id: 100,
    name: "Client01",
    email: "client01@email.com",
    discountPercentual: 10,
    freePizzaFlavor: "Ham and cheese"
}