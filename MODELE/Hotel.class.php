<?php


class Hotel
{
    private $nbRoomTotal = 0;
    private $nbRoomFree = 0;
    private $nbRoomOccupied = 0;
    private $workers = array();
    private $rooms;
    private $roomsCVP;
    private $roomsCVJ;
    private $roomsCVO;
    private $roomsCVIO;
    private $roomsCDA;
    private $roomsExec;
    private $roomsAmb;
    private $roomsRoyale;
    private $revenue;
    private $arrCsv;


    public function __construct($arrCsv)
    {
        $this->arrCsv = $arrCsv;
        $nbRow = count($this->arrCsv);
        for ($i=1; $i <$nbRow; $i++ ){
            for ($j = 0; $j < $this->arrCsv[$i][5]; $j++){
                $this->rooms[] = new Room($this->arrCsv[$i][0], $this->arrCsv[$i][1], $this->arrCsv[$i][2], $this->arrCsv[$i][4], $this->arrCsv[$i][6]);
                $this->nbRoomTotal++;
                $this->nbRoomFree++;
            }
        }
        foreach ($this->rooms as $typeRoom){
            $type = $typeRoom->getType();
            switch ($type){
                case 'Chambre Vue Piscine':
                    $this->roomsCVP[] = $typeRoom;
                    break;
                case 'Chambre Vue Jardin':
                    $this->roomsCVJ[] = $typeRoom;
                    break;
                case 'Chambre Vue Océan':
                    $this->roomsCVO[] = $typeRoom;
                    break;
                case 'Chambre vue imprenable sur l\'océan':
                    $this->roomsCVIO[] = $typeRoom;
                    break;
                case 'Suite CDA':
                    $this->roomsCDA[] = $typeRoom;
                    break;
                case 'Suite Executive':
                    $this->roomsExec[] = $typeRoom;
                    break;
                case 'Suite Ambassadeur':
                    $this->roomsAmb[] = $typeRoom;
                    break;
                case 'Suite Royale':
                    $this->roomsRoyale[] = $typeRoom;
                    break;
            }
        }
    }

    public function authentificationLogin()
    {
        echo "Quel est votre login?: ";
        $log = readline();

        foreach ($this->rooms->getCustomers() as $customer){
            $arrLogCustomer[] = $customer->getLogin();
        }
        if (in_array($log, $arrLogCustomer)){
            return "customer";
        }
        else{
            foreach ($this->workers as $worker){
                $arrlogWorker[] = $worker->getlogin();
            }
            if (in_array($log, $arrlogWorker)){
                return "worker";
            }else{
                return "login inexistant";
            }
        }
    }

    
    public function authentificationPassword()
    {

    }

    /**
     * @return mixed
     */
    public function getNbRoomFree()
    {
        return $this->nbRoomFree;
    }

    /**
     * @param mixed $nbRoomFree
     */
    public function setNbRoomFree($nbRoomFree)
    {
        $this->nbRoomFree = $nbRoomFree;
    }

    /**
     * @return mixed
     */
    public function getNbRoomOccupied()
    {
        return $this->nbRoomOccupied;
    }

    /**
     * @param mixed $nbRoomOccupied
     */
    public function setNbRoomOccupied($nbRoomOccupied)
    {
        $this->nbRoomOccupied = $nbRoomOccupied;
    }

    /**
     * @return mixed
     */
    public function getNbRoomTotal()
    {
        return $this->nbRoomTotal;
    }

    /**
     * @param mixed $nbRoomTotal
     */
    public function setNbRoomTotal($nbRoomTotal)
    {
        $this->nbRoomTotal = $nbRoomTotal;
    }

    /**
     * @return mixed
     */
    public function getWorker()
    {
        return $this->worker;
    }

    /**
     * @param mixed $worker
     */
    public function setWorker($worker)
    {
        $this->worker = $worker;
    }

    /**
     * @return mixed
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param mixed $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return mixed
     */
    public function getRoomsCVP()
    {
        return $this->roomsCVP;
    }

    /**
     * @param mixed $roomsCVP
     */
    public function setRoomsCVP($roomsCVP)
    {
        $this->roomsCVP = $roomsCVP;
    }

    /**
     * @return mixed
     */
    public function getRoomsCVJ()
    {
        return $this->roomsCVJ;
    }

    /**
     * @param mixed $roomsCVJ
     */
    public function setRoomsCVJ($roomsCVJ)
    {
        $this->roomsCVJ = $roomsCVJ;
    }

    /**
     * @return mixed
     */
    public function getRoomsCVO()
    {
        return $this->roomsCVO;
    }

    /**
     * @param mixed $roomsCVO
     */
    public function setRoomsCVO($roomsCVO)
    {
        $this->roomsCVO = $roomsCVO;
    }

    /**
     * @return mixed
     */
    public function getRoomsCVIO()
    {
        return $this->roomsCVIO;
    }

    /**
     * @param mixed $roomsCVIO
     */
    public function setRoomsCVIO($roomsCVIO)
    {
        $this->roomsCVIO = $roomsCVIO;
    }

    /**
     * @return mixed
     */
    public function getRoomsCDA()
    {
        return $this->roomsCDA;
    }

    /**
     * @param mixed $roomsCDA
     */
    public function setRoomsCDA($roomsCDA)
    {
        $this->roomsCDA = $roomsCDA;
    }

    /**
     * @return mixed
     */
    public function getRoomsExec()
    {
        return $this->roomsExec;
    }

    /**
     * @param mixed $roomsExec
     */
    public function setRoomsExec($roomsExec)
    {
        $this->roomsExec = $roomsExec;
    }

    /**
     * @return mixed
     */
    public function getRoomsAmb()
    {
        return $this->roomsAmb;
    }

    /**
     * @param mixed $roomsAmb
     */
    public function setRoomsAmb($roomsAmb)
    {
        $this->roomsAmb = $roomsAmb;
    }

    /**
     * @return mixed
     */
    public function getRoomsRoyale()
    {
        return $this->roomsRoyale;
    }

    /**
     * @param mixed $roomsRoyale
     */
    public function setRoomsRoyale($roomsRoyale)
    {
        $this->roomsRoyale = $roomsRoyale;
    }

    /**
     * @return mixed
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @param mixed $revenue
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }


}