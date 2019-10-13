Type="win:UInt64" name="NetLuid" outType="win:HexInt64" />
            <data inType="win:UInt32" name="NdisMediumType" outType="xs:unsignedInt" />
            <data inType="win:UInt32" name="FriendlyNameLen" />
            <data inType="win:UnicodeString" length="FriendlyNameLen" name="FriendlyName" outType="xs:string" />
            <data inType="win:UInt32" name="DeviceNameLen" />
            <data inType="win:UnicodeString" length="DeviceNameLen" name="DeviceName" outType="xs:string" />
            <data inType="win:UInt32" name="Context" />
          </template>
          <template tid="tid_packetdrop">
            <data inType="win:UInt32" map="valuemap_dropreason" name="DropReason" outType="xs:unsignedInt" />
          </template>
          <template tid="tid_nonconfqtc">
            <data inType="win:Int16" name="DsClass" outType="xs:short" />
            <data inType="win:Int16" name="TrafficClass" outType="xs:short" />
            <data inType="win:Int16" name="Wmm" outType="xs:short" />
          </template>
          <template tid="tid_allowappdscpmarking">
            <data inType="win:UInt32" name="Allow" outType="xs:unsignedInt" />
          </template>
          <template tid="tid_tbcsscheduling">
            <data inType="win:UInt32" name="IneligibleCount" outType="xs:unsignedInt" />
            <data inType="win:UInt32" name="TotalCount" outType="xs:unsignedInt" />
            <data inType="win:UInt32" name="IneligibleFirstDelta" outType="xs:unsignedInt" />
            <data inType="win:UInt32" name="IneligibleLastDelta" outType="xs:unsignedInt" />
          </template>
        </templates>
        <events>
          <event channel="CHID_PACER" keywords="ut:Configuration" level="win:Informational" message="$(string.createflow_v0.EventMessage)" notLogged="true" symbol="QOS_EVENT_PACER_CREATE_FLOW_V0" template="tid_createflow_v0" value="1" />
          <event channel="CHID_PACER" keywords="ut:Configuration" level="win:Informational" message="$(string.createflow_v1.EventMessage)" opcode="win:Start" symbol="QOS_EVENT_PACER_CREATE_FLOW" template="tid_createflow_v1" value="1" version="1" />
          <event channel="CHID_PACER" keywords="ut:Configuration" level="win:Informational" message="$(string.updateflow_failure_v0.EventMessage)" notLogged="true" symbol="QOS_EVENT_PACER_UPDATE_FLOW_FAILURE_V0" template="tid_updateflow_failure_v0" value="2" />
          <event channel="CHID_PACER" keywords="ut:Configuration" level="win:Informational" message="$(string.updateflow_v1.EventMessage)" opcode="win:Info" symbol="QOS_EVENT_PACER_UPDATE_FLOW" template="tid_updateflow_v1" value="2" version="1" />
          <event channel="CHID_PACER" keywords="ut:Global" level="win:Informational" message="$(string.pacerstart_v0.EventMessage)" notLogged="true" symbol="QOS_EVENT_PACER_START_V0" template="tid_pacerstartstop_v0" value="3" />
          <event channel="CHID_PACER" keywords="ut:Global" level="win:Informational" message="$(string.pacerstart_v1.EventMessage)" opcode="win:Info" symbol="QOS_EVENT_PACER_START" template="tid_pacerstartstop_v1" value="3" version="1" />
          <event channel="CHID_PACER" level="win:Informational" message="$(string.pacerstop_v0.EventMessage)" notLogged="true" symbol="QOS_EVENT_PACER_STOP_V0" template="tid_pacerstartstop_v0" value="4" />
          <event channel="CHID_PACER" keywords="ut:Global" level="win:Informational" message="$(string.pacerstop_v1.EventMessage)" opcode="win:Info" symbol="QOS_EVENT_PACER_STOP" template="tid_pacerstartstop_v1" value="4" version="1" />
          <event channel="CHID_PACER" level="win:Informational" message="$(string.updateflow_success_v0.EventMessage)" notLogged="true" symbol="QOS_EVENT_PACER_UPDATE_FLOW_SUCCESS_V0" template="tid_updateflow_success_v0" value="5" />
          <event channel="CHID_PACER" keywords="ut:Configuration" level="win:Informational" message="$(string.cleanupflow.EventMessage)" opcode="win:Stop" symbol="QOS_EVENT_PACER_CLEANUP_FLOW" template="tid_cleanupflow" value="6" version="0" />
          <event channel="CHID_PACER" keywords="ut:Dropped ut:Packet" level="win:Error" message="$(string.packetdrop.EventMessage)" opcode="win:Info" symbol="QOS_EVENT_PACER_PACKET_DROP" template="tid_packetdrop" value="7" version="0" />
          <event channel="CHID_PACER" keywords="ut:Packet" level="win:Warning" message="$(string.nonconfqtc.EventMessage)" opcode="win:Info" symbol="QOS_EVENT_PACER_NONCONF_QTC" template="tid_nonconfqtc" value="8" version="0" />
          <event channel="CHID_PACER" keywords="ut:Global" level="win:Informational" message="$(string.allowappdscpmarking.EventMessage)" opcode="win:Info" symbol="QOS_EVENT_PACER_ALLOW_APP_DSCP_MARKING" template="tid_allowappdscpmarking" value="9" version="0" />
          <event channel="CHID_PACER" keywords="ut:Packet" level="win:Informational" message="$(string.tbcsscheduling.EventMessage)" opcode="win:Info" symbol="QOS_EVENT_PACER_TBC_SCHEDULING" template="tid_tbcsscheduling" value="10" version="0" />
        </events>
      </provider>
    </events>
    <counters xmlns="http://schemas.microsoft.com/win/2005/12/counters" schemaVersion="1.1">
      <provider applicationIdentity="%SystemRoot%\system32\drivers\pacer.sys" providerGuid="{F25A20A5-FD7A-417b-AFC3-76295EBAC77C}" providerType="kernelMode" resourceBase="1000">
        <counterSet description="The Pacer Flow performance counter set consists of flow statistics from the packet scheduler." guid="{811BBCE5-7327-4ad9-AB62-A8B955F61EEF}" instances="multiple" name="Pacer Flow" symbol="PacerFlowCounterSet" uri="Microsoft.Windows.QoS.PacerFlow">
          <structs>
            <struct name="PacerFlowCounters" type="PC_FLOW_COUNTERS" />
          </structs>
          <counter defaultScale="0" description="The number of packets dropped by the packet scheduler." detailLevel="standa